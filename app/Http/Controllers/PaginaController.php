<?php

namespace Analisis\Http\Controllers;

use Analisis\ResultadoAnalisis;
use Analisis\AnalisisMuestra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class PaginaController extends Controller
{
    public function index(){
    	return view('analisis/index');
    }

    public function login(){
        return view('analisis/login');
    }

    public function muestra(){
    	return view('analisis/RecepecioMuestra');
    }

    public function RegistroParticular(){
    	return view('analisis/RegistroParticular');
    }

    public function ListaMuestra(){
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
        $datos = DB::table('resultadoanalisis')->get();
    	return view('analisis/BusquedaMuestra',compact('datos'));
    }

    public function resultadoMuestra(){
    	return view('analisis/Resultado');
    }

    public function store(Request $request){
            
            $datos = DB::table('resultadoanalisis')
            ->where('resultadoanalisis.idAnalisisMuestras', '=', $request->input('boton'))
            ->get();
            //return view('analisis/RegistroMuestra',compact('datos'));
            echo $datos;
            
    }


}
