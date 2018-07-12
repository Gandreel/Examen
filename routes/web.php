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

//Pagina de Inicio
Route::get('inicio','analisisMuestraController@index');
//Pagina de Registro
Route::get('registro','particularController@index');
//pagina de Login
Route::get('login','particularController@login');
Route::get('recepcion','analisisMuestraController@create');
Route::get('buscar','analisisMuestraController@buscar');
Route::get('procesar','analisisMuestraController@ListaMuestra');
Route::get('registro-Muestra','analisisMuestraController@RegistroMuestra');

//meotodo para desloguearse
Route::get('out','particularController@out');


Route::post('store','analisisMuestraController@store');
Route::post('store2','particularController@store2');
Route::post('store4','empresaController@store4');
Route::post('store3','analisisMuestraController@store3');
//meotodo para loguearse
Route::post('loger','particularController@Loger');
Route::post('show','analisisMuestraController@show');
Route::post('edit','analisisMuestraController@edit');
//Graficos
Route::post('resultado','analisisMuestraController@resultadoMuestra');


