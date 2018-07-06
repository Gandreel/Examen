<?php

namespace Analisis\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
    	return view('analisis/index');
    }
}
