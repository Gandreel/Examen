<?php

namespace analisis\Http\Controllers;

use Illuminate\Http\Request;
use analisis\Empleado;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class empleadoController extends Controller
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
    public function store(Request $request)
    {
        //
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

    public function listar(){
        if(Session::get('uss') == 0 || Session::get('uss') != null ){
            if(Session::get('uss') == 1){
                $empleados=empleado::all();
                return view('administrador/mantenedorEmpleado',compact('empleados'));
            }else{
                $mensaje = 'No tiene Permisos';
                return view('analisis/index',compact('mensaje'));
            }
        }else{
            return view('analisis/login');   
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $empleado = empleado::where('rutEmpleado',$request->input('id'))->first();
        $rutEmpleado = $empleado->rutEmpleado;
        return view('administrador/editarEmpleado',compact('empleado','rutEmpleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Empleado::where('rutEmpleado',$request->get('id'))
        ->update(['rutEmpleado' => $request->get('rut'),'nombreEmpleado'=> $request->get('nombre'),'categoria'=> $request->get('categoria')]);

    $empleados=empleado::all();  
    return view('administrador/indexAdministrador',compact('empleados'));
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
