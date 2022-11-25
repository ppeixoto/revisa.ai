<?php

use App\Http\Controllers\Site;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

/**
 * Seller´s and User´s routes
 */
Route::prefix('auth')->group(function () {
    Route::get('/register', [Site\AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [Site\AuthController::class, 'register'])->name('signup');
    Route::get('/login', [Site\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [Site\AuthController::class, 'login'])->name('signin');
    Route::get('/logout', [Site\AuthController::class, 'logout'])->name('logout');
});

/**
 * Admin´s routes
 */
Route::prefix('admin/auth')->name('admin.auth.')->group(function () {
    Route::get('/login', [Admin\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [Admin\AuthController::class, 'login'])->name('signin');
    Route::get('/logout', [Admin\AuthController::class, 'logout'])->name('logout');
});
