<?php

namespace Analisis\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

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

    public function ListaMuestra(){
        $datos = null;
        $datos = DB::table('resultadoanalisis')
            ->join('analisismuestras', 'analisismuestras.idAnalisisMuestras', '=', 'resultadoanalisis.idAnalisisMuestras')
            ->select('analisismuestras.*', 'resultadoanalisis.estado')
            ->get();
    	return view('analisis/ListaMuestra',compact('datos'));
    }

    public function RegistroMuestra(){
    	return view('analisis/RegistroMuestra');
    }

    public function BusquedaMuestra(){
    	return view('analisis/BusquedaMuestra');
    }

    public function resultadoMuestra(){
    	return view('analisis/Resultado');
    }
}
