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
