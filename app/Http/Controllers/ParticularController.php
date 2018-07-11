<?php

namespace analisis\Http\Controllers;

use analisis\Particular;
use analisis\Empresa;
use Illuminate\Http\Request;

class particularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('analisis/RegistroParticular');
    }

    public function login()
    {
        return view('analisis/login');
    }

    public function Loger(Request $request)
    {
        echo 'funciona';
        try {
            try {
                $datos = Particular::where('nombreParticular',$request->input('username'))
                ->orWhere('passwordParticular',$request->input('password'))
                ->get();
                //
            } catch (Exception $e) {
                $datos = Empresa::where('nombreEmpresa',$request->input('username'))
                ->orWhere('passwordEmpresa',$request->input('password'))
                ->get(); 
                //
            }
        } catch (Exception $e) {
            echo 'usuario Incorrecto';
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            
        } catch (Exception $e) {
            
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
