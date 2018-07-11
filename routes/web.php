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
Route::post('store','particularController@store');

Route::get('login','particularController@login');
Route::post('loger','particularController@Loger');


//Route::get('procesar','PaginaController@ListaMuestra');
//Route::post('store','PaginaController@store');

//Route::get('registro-Muestra','PaginaController@RegistroMuestra');
//Route::get('buscar','PaginaController@BusquedaMuestra');
//Route::get('resultado','PaginaController@resultadoMuestra');
