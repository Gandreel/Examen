<?php

namespace analisis\Http\Controllers;

use analisis\Particular;
use analisis\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function out()
    {
        Session::forget('uss');
        return redirect()->action('analisisMuestraController@index');
    }

    public function Loger(Request $request)
    {
        try {
            try {
                $datos = Particular::where('nombreParticular',$request->input('username'))
                ->orWhere('passwordParticular',$request->input('password'))
                ->get();
                
                Session::put('uss', '1');
                return view('analisis/index');

            } catch (Exception $e) {
                $datos = Empresa::where('nombreEmpresa',$request->input('username'))
                ->orWhere('passwordEmpresa',$request->input('password'))
                ->get(); 
                
                Session::put('uss', '2');
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
    public function store2(Request $request)
    {
        try {
            $rut = $request->input('txtRut');
            $nombre = $request->input('txtNombre');
            $password = $request->input('txtPassword');
            $email = $request->input('txtEmail');
            $telefono = $request->input('txtTelefono');
            $direccion = $request->input('txtDir');

            DB::table('particular')->insert(
                ['rutParticular' => $rut,'nombreParticular' =>$nombre,'passwordParticular'=>$password,'emailParticular'=> $email,'rutParticular'=> $rut,'direccionParticular' => $direccion]);

            $users = DB::table('particular')
                ->where('rutParticular', $rut)
                ->get();

            $users = DB::table('particular')->select('codigoParticular')
                ->where('rutParticular', $rut)
                ->first();

            DB::table('telefono')->insert(
                ['numeroTelefono'=> $telefono,'Particular_codigoParticular' => $users->codigoParticular]);

            echo "Ha sido registrado";

         } catch (Exception $e) {
            echo "Error, vuelva a intentarlo";
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
