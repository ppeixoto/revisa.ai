<?php

use App\Http\Controllers\Seller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Seller\HomeController::class, 'index'])->name('home');
Route::post('/', [Seller\HomeController::class, 'store'])->name('store');

Route::middleware('role:seller')->group(function () {
    Route::get('/2', [Seller\HomeController::class, 'index'])->name('home2');
    Route::resource('artistas', Seller\ArtistController::class, ['names' => 'artists'])->parameter('artistas', 'artist');
});
