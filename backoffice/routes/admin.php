<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', [Admin\HomeController::class, 'index'])->name('home');

Route::get('/perfil', [Admin\UserController::class, 'profile'])->name('profile');
Route::resource('usuarios', Admin\UserController::class, ['names' => 'users'])->parameter('usuarios', 'user');
Route::resource('permissoes', Admin\UserController::class, ['names' => 'roles'])->parameter('permissoes', 'role');
Route::resource('operadores', Admin\OperatorController::class, ['names' => 'operators'])->parameter('operadores', 'admin');
