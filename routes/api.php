<?php

use Illuminate\Http\Request;

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

Route::get('/usuarios','ApiController@usuarios');
Route::post('/usuarios','ApiController@login');
Route::post('/register','ApiController@registrarUsuario');
Route::post('/update/{id}','ApiController@updateUsuario');
Route::get('/usuario/{id}','ApiController@usuario');
Route::get('/proyectp/{id}','ApiController@show');

Route::resource('tec', 'TecnologiaController');
Route::resource('tipotec', 'TipotecController');
Route::resource('proyect', 'ProyectoController');
