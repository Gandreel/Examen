<?php

namespace analisis\Http\Controllers;

use Illuminate\Http\Request;

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
        try {
            $fecha = $request->input('dateFecha');
            $temperatura = $request->input('txtTemperatura');
            $cantidad = $request->input('txtCantMuestra');
            $rutEmpresa = $request->input('txtRut');
            $rutEmpleado = $request->input('txtEmpleado');

            echo $fecha;

            DB::insert('insert into analisismuestra (fechaRecepcion,temperaturaMuestra,cantidadMuestra,Empresa_codigoEmpresa,rutEmpleadoRecibe) values(?,?,?,?,?)',[$fecha,$temperatura,$cantidad,$rutEmpresa,$rutEmpleado]);


            echo 'registro exitoso';
        } catch (Exception $e) {

            echo 'registro erroneo';
        }
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
