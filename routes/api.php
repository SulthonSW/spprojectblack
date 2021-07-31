<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/pj1_1', [App\Http\Controllers\ApiController::class, 'cpj1_1']);
Route::get('/pj1_1', [App\Http\Controllers\ApiController::class, 'spj1_1']);

Route::post('/pj1_2', [App\Http\Controllers\ApiController::class, 'cpj1_2']);
Route::get('/pj1_2', [App\Http\Controllers\ApiController::class, 'spj1_2']);

Route::post('/pj1_3', [App\Http\Controllers\ApiController::class, 'cpj1_3']);
Route::get('/pj1_3', [App\Http\Controllers\ApiController::class, 'spj1_3']);
