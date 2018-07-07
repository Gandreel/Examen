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

// Controllador para vistas
Route::get('registro','PaginaController@RegistroParticular');
Route::get('inicio','PaginaController@index');
Route::get('muestra','PaginaController@muestra');
