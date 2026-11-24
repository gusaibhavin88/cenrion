<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CapabilitiesController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\LabsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\VacancyController as AdminVacancyController;
use App\Http\Controllers\Admin\NavbarController as AdminNavbarController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/capabilities', [CapabilitiesController::class, 'index'])->name('capabilities');
Route::get('/solutions', [SolutionsController::class, 'index'])->name('solutions');
Route::get('/labs', [LabsController::class, 'index'])->name('labs');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/insights', [InsightsController::class, 'index'])->name('insights');
Route::get('/insights/{slug}', [InsightsController::class, 'show'])->name('insights.show');
Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
Route::prefix('adminpanel')->group(function () {
    // Guest Authentication
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::match(['get', 'post'], '/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Protected Admin Routes
    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Blogs Management
        Route::prefix('blogs')->name('admin.blogs.')->group(function () {
            Route::get('/', [AdminBlogController::class, 'index'])->name('index');
            Route::get('/create', [AdminBlogController::class, 'create'])->name('create');
            Route::post('/', [AdminBlogController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [AdminBlogController::class, 'edit'])->name('edit');
            Route::match(['put', 'post'], '/{id}', [AdminBlogController::class, 'update'])->name('update');
            Route::match(['delete', 'post'], '/{id}/delete', [AdminBlogController::class, 'destroy'])->name('destroy');
        });

        // Vacancies Management
        Route::prefix('vacancies')->name('admin.vacancies.')->group(function () {
            Route::get('/', [AdminVacancyController::class, 'index'])->name('index');
            Route::get('/create', [AdminVacancyController::class, 'create'])->name('create');
            Route::post('/', [AdminVacancyController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [AdminVacancyController::class, 'edit'])->name('edit');
            Route::match(['put', 'post'], '/{id}', [AdminVacancyController::class, 'update'])->name('update');
            Route::match(['delete', 'post'], '/{id}/delete', [AdminVacancyController::class, 'destroy'])->name('destroy');
        });

        // Navbar Pages Control (via Radio Buttons)
        Route::prefix('navbar')->name('admin.navbar.')->group(function () {
            Route::get('/', [AdminNavbarController::class, 'index'])->name('index');
            Route::post('/', [AdminNavbarController::class, 'update'])->name('update');
        });
    });
});
