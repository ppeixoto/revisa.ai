<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', [Dashboard\HomeController::class, 'index'])->name('home');
Route::get('/minha-conta', [Dashboard\AccountController::class, 'index'])->name('account.index');
