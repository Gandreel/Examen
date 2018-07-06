<?php

namespace Analisis\Http\Controllers;

use Analisis\Particular;
use Analisis\Telefono;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class ParticularController extends Controller
{
    public function RegistroParticular(){
    	return view('analisis/RegistroParticular');
    }
}
