<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio','analisisMuestraController@index');

Route::get('registro','particularController@index');

Route::post('store2','particularController@store');

Route::post('store2','particularController@store2');

Route::get('login','particularController@login');
Route::post('loger','particularController@Loger');

Route::get('recepcion','analisisMuestraController@create');
Route::post('store','analisisMuestraController@store');

Route::get('procesar','analisisMuestraController@ListaMuestra');
Route::post('store3','analisisMuestraController@store');

Route::get('buscar','analisisMuestraController@buscar');
Route::post('show','analisisMuestraController@show');

//Route::get('registro-Muestra','PaginaController@RegistroMuestra');

//Route::get('resultado','PaginaController@resultadoMuestra');
