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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/multiplicacion/list', 'App\Http\Controllers\MultiplicacionController@index');//Mostrar todos los registros
Route::post('/multiplicacion/save', 'App\Http\Controllers\MultiplicacionController@store');
Route::delete('/multiplicacion/delete', 'App\Http\Controllers\MultiplicacionController@destroy');