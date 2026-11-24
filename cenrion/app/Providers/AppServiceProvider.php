<?php

namespace App\Providers;

use App\Services\ContentManager;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Track if database check has run during this process.
     */
    protected static bool $dbChecked = false;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ContentManager::class, function () {
            return new ContentManager();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Auto-check and create database if not exists
        $this->autoInitializeDatabase();

        // Share navbar settings with all views
        View::composer('*', function ($view) {
            try {
                $contentManager = app(ContentManager::class);
                $view->with('navbarSettings', $contentManager->getNavbarSettings());
            } catch (\Throwable $e) {
                $view->with('navbarSettings', []);
            }
        });
    }

    /**
     * Automatically check and create database if not exists, and run migrations/seeds.
     */
    protected function autoInitializeDatabase(): void
    {
        if (static::$dbChecked) {
            return;
        }
        static::$dbChecked = true;

        if (config('database.default') !== 'mysql') {
            return;
        }

        $configuredHost = config('database.connections.mysql.host', '127.0.0.1');
        $port = (int)config('database.connections.mysql.port', 3306);
        $dbName = config('database.connections.mysql.database', 'cenrion');
        $username = config('database.connections.mysql.username', 'root');
        $password = config('database.connections.mysql.password', '');

        $inDocker = file_exists('/.dockerenv');

        $candidateHosts = [];
        if ($configuredHost === 'localhost') {
            $candidateHosts = $inDocker ? ['host.docker.internal', 'db', '127.0.0.1'] : ['127.0.0.1', 'localhost'];
        } else {
            $candidateHosts[] = $configuredHost;
            if ($inDocker) {
                if (!in_array('host.docker.internal', $candidateHosts)) $candidateHosts[] = 'host.docker.internal';
                if (!in_array('db', $candidateHosts)) $candidateHosts[] = 'db';
            }
            if (!in_array('127.0.0.1', $candidateHosts)) $candidateHosts[] = '127.0.0.1';
        }

        $pdo = null;
        $connectedHost = null;

        foreach ($candidateHosts as $host) {
            try {
                $dsn = "mysql:host={$host};port={$port}";
                $options = [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_TIMEOUT => 2,
                ];
                $pdo = new \PDO($dsn, $username, $password, $options);
                $connectedHost = $host;
                break;
            } catch (\Throwable $e) {
                // try next
            }
        }

        if (!$pdo) {
            Log::warning("Auto database initialization: could not connect to MySQL on candidate hosts: " . implode(', ', $candidateHosts));
            return;
        }

        try {
            // Update runtime host config to the working host
            Config::set('database.connections.mysql.host', $connectedHost);

            // Execute CREATE DATABASE IF NOT EXISTS
            $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$dbName}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");

            // Check if tables exist, auto-migrate and seed if needed
            if (!Schema::hasTable('admins') || !Schema::hasTable('blogs')) {
                Artisan::call('migrate', ['--force' => true]);
                Artisan::call('db:seed', ['--force' => true]);
            }
        } catch (\Throwable $e) {
            Log::warning('Auto database initialization check: ' . $e->getMessage());
        }
    }
}
