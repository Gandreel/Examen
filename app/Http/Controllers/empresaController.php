<?php

namespace analisis\Http\Controllers;

use analisis\Particular;
use analisis\Empresa;
use analisis\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store4(Request $request)
    {
        try {
             //empresa
             $rut = $request->input('txtRut');
             $nombre = $request->input('txtNombre');
             $password = $request->input('txtPass'); 
             $direccion = $request->input('txtDir');
             
             //contacto
             $rutC = $request->input('txtRutC');
             $nombreC = $request->input('txtNombreC');
             $email = $request->input('txtEmail'); 
             $telefono = $request->input('txtFono');
 
             $valida = Particular::all();
             foreach($valida as $val){
                if($val->nombreParticular == $nombre){
                    $mensaje = 'Usuario ya existente';
                    return view('analisis/RegistroParticular',compact('mensaje'));
                }
             }

             $valida = Empresa::all();
             foreach($valida as $val){
                if($val->nombreEmpresa == $nombre){
                    $mensaje = 'Usuario ya existente';
                    return view('analisis/RegistroParticular',compact('mensaje'));
                }
             }

             $valida = Empleado::all();
             foreach($valida as $val){
                if($val->nombreEmpleado == $nombre){
                    $mensaje = 'Usuario ya existente';
                    return view('analisis/RegistroParticular',compact('mensaje'));
                }
             }

             DB::table('empresa')->insert(
                 ['rutEmpresa' => $rut,'nombreEmpresa' =>$nombre,'passwordEmpresa'=>$password,
                 'direccionEmpresa' => $direccion]);
 
             $users = DB::table('empresa')
                 ->where('rutEmpresa', $rut)
                 ->get();
 
             $users = DB::table('empresa')->select('codigoEmpresa')
                 ->where('rutEmpresa', $rut)
                 ->first();
 
             DB::table('contacto')->insert(
                 ['rutContacto'=> $rutC,'nombreContacto' => $nombreC,'emailContacto' => $email,
                 'telefonoContacto'=>$telefono,'Empresa_codigoEmpresa'=> $users->codigoEmpresa]);
            

             return view('analisis/login');
 
            } catch (Exception $e) {
                $mensaje = 'Error al registrar';
                return view('analisis/RegistroParticular',compact('mensaje'));
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
