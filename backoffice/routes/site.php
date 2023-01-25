<?php

use App\Http\Controllers\Site;
use Illuminate\Support\Facades\Route;

Route::get('/', [Site\HomeController::class, 'index'])->name('home');
Route::get('/solicite-sua-revisao', [Site\HomeController::class, 'start'])->name('start');
Route::get('/minha-conta', [Site\HomeController::class, 'account'])->name('my-account');

Route::controller(Site\ContactController::class)->group(function () {
    Route::get('/contato', 'index')->name('contact.index');
    Route::post('/contato', 'store')->name('contact.store');
    Route::post('/contatoPedido', 'storeWithOrder')->name('contact.storeOrder');
});
