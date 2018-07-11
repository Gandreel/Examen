<?php

namespace analisis\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class analisisMuestraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('analisis/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('analisis/RecepcioMuestra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha = $request->input('dateFecha');
        $temperatura = $request->input('txtTemperatura');
        $cantidad = $request->input('txtCantMuestra');
        $rutEmpresa = $request->input('txtRut');
        $rutEmpleado = $request->input('txtEmpleado');
        
        try {
            DB::table('analisismuestras')->insert(
                ['FechaRecepcion'=>$fecha,'temperaturaMuestra'=>$temperatura,'cantidadMuestra'=>$cantidad,'Particular_codigoParticular'=>$rutEmpresa,'rutEmpleadoRecibe'=>$rutEmpleado]);
            
        } catch (Exception $e) {
            try {
                    DB::table('analisismuestras')->insert(
                    ['FechaRecepcion'=>$fecha,'temperaturaMuestra'=>$temperatura,'cantidadMuestra'=>$cantidad,'Empresa_codigoEmpresa'=>$rutEmpresa,'rutEmpleadoRecibe'=>$rutEmpleado]);
                    
            } catch (Exception $e) {
                            
            }            
        }
    }

    public function ListaMuestra(){
        $datos = DB::table('resultadoanalisis')
            ->join('analisismuestras', 'analisismuestras.idAnalisisMuestras', '=', 'resultadoanalisis.idAnalisisMuestras')
            ->select('analisismuestras.*', 'resultadoanalisis.estado')
            ->get();
        return view('analisis/ListaMuestra',compact('datos'));
    }

    public function store3(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
