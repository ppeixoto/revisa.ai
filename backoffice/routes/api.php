<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('estados', [Api\StateController::class, 'index'])->name('states.index');
// Route::get('estados/{estado}', [Api\StateController::class, 'show'])->parameter('estados', 'state')->name('states.show');
Route::apiResource('estados', Api\StateController::class, ['names' => 'states'])->parameter('estados', 'state')->only(['index', 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
