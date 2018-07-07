<?php

namespace Analisis\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
    	return view('analisis/index');
    }

    public function muestra(){
    	return view('analisis/RecepecioMuestra');
    }

    public function RegistroParticular(){
    	return view('analisis/RegistroParticular');
    }
}
