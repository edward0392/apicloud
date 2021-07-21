<?php

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

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

// estas rutas se pueden acceder sin proveer de un token válido.
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');
// estas rutas requiren de un token válido para poder accederse.
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::post('/logout', 'App\Http\Controllers\AuthController@logout');
});
