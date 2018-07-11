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
<<<<<<< HEAD
Route::post('store2','particularController@store');
=======
Route::post('store2','particularController@store2');
>>>>>>> f2cfcb28eaefde06c85bb25e3612e5321b03bb44

Route::get('login','particularController@login');
Route::post('loger','particularController@Loger');

Route::get('recepcion','analisisMuestraController@create');
Route::post('store','analisisMuestraController@store');


//Route::get('procesar','PaginaController@ListaMuestra');
//Route::post('store','PaginaController@store');

//Route::get('registro-Muestra','PaginaController@RegistroMuestra');
//Route::get('buscar','PaginaController@BusquedaMuestra');
//Route::get('resultado','PaginaController@resultadoMuestra');
