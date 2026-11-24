<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('db:init', function () {
    $configuredHost = config('database.connections.mysql.host', '127.0.0.1');
    $port = (int)config('database.connections.mysql.port', 3306);
    $dbName = config('database.connections.mysql.database', 'cenrion');
    $username = config('database.connections.mysql.username', 'root');
    $password = config('database.connections.mysql.password', '');

    $inDocker = file_exists('/.dockerenv');

    // Build candidate hosts to try
    $candidateHosts = [];
    if ($configuredHost === 'localhost') {
        if ($inDocker) {
            $candidateHosts = ['host.docker.internal', 'db', '127.0.0.1'];
        } else {
            $candidateHosts = ['127.0.0.1', 'localhost'];
        }
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
    $lastError = null;

    foreach ($candidateHosts as $host) {
        $this->info("Trying connection to MySQL on {$host}:{$port} as '{$username}'...");
        try {
            $dsn = "mysql:host={$host};port={$port}";
            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_TIMEOUT => 3,
            ];
            $pdo = new \PDO($dsn, $username, $password, $options);
            $connectedHost = $host;
            $this->info("Successfully connected to MySQL on {$host}:{$port}!");
            break;
        } catch (\Throwable $e) {
            $lastError = $e->getMessage();
        }
    }

    if (!$pdo) {
        $this->error("Could not connect to MySQL. Last error: {$lastError}");
        $this->line("Tip: If MySQL is installed on Windows, ensure Windows MySQL service is running.");
        $this->line("Tip: In .env set DB_HOST=host.docker.internal when connecting from Docker to Windows MySQL.");
        return 1;
    }

    try {
        // Update runtime config to the working host
        Config::set('database.connections.mysql.host', $connectedHost);

        $sql = "CREATE DATABASE IF NOT EXISTS `{$dbName}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
        $pdo->exec($sql);
        $this->info("Database `{$dbName}` verified/created with utf8mb4.");

        $this->info("Running migrations...");
        $this->call('migrate', ['--force' => true]);

        $this->info("Running seeders...");
        $this->call('db:seed', ['--force' => true]);

        $this->info("Initialization complete! Cenrion database is ready.");
        return 0;
    } catch (\Throwable $e) {
        $this->error("Database initialization error: " . $e->getMessage());
        return 1;
    }
})->purpose('Verify and create cenrion database with utf8mb4 and run migrations');
