<?php

namespace analisis\Http\Controllers;

use analisis\Particular;
use analisis\Empresa;
use analisis\Empleado;
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
        $mensaje = null;
        return view('analisis/RegistroParticular',compact('mensaje'));
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

            $tipo = $request->input('tipo');

            if($tipo == 1){
                $datos = Empleado::where('nombreEmpleado',$request->input('username'))
                ->orWhere('passwordEmpleado',$request->input('password'))->first();

                if($datos->categoria == 1){
                    Session::put('uss', '1');
                    return view('administrador/indexAdministrador');
                }else if($datos->categoria == 2){
                    Session::put('uss', '2');
                    $mensaje = null;
                    return view('analisis/index',compact('mensaje'));
                }else if($datos->categoria == 3){
                    Session::put('uss', '3');
                    $mensaje = null;
                    return view('analisis/index',compact('mensaje'));
                }    
            }else if($tipo == 2){
                $datos = Particular::where('nombreParticular',$request->input('username'))
                ->orWhere('passwordParticular',$request->input('password'))->first();
                
                $var = $datos['Activo'];

                    if($var == 'A'){
                        Session::put('uss', '4');
                        $mensaje = null;
                        return view('analisis/index',compact('mensaje'));
                    }else{
                        echo "<script> alert('Cuenta Desactivada'); window.location= 'login'</script>";
                    }    
            }else if($tipo == 3){
                $datos = Empresa::where('nombreEmpresa',$request->input('username'))
                ->orWhere('passwordEmpresa',$request->input('password'))->first();
                Session::put('uss', '4');
                $mensaje = null;
                return view('analisis/index',compact('mensaje'));
            }else{
                $datos = Empleado::where('nombreEmpleado',$request->input('username'))
                ->orWhere('passwordEmpleado',$request->input('password'))->first();

                if($datos->categoria == 1){
                    Session::put('uss', '1');
                    return view('administrador/indexAdministrador');
                }else {
                 echo "<script> alert('Usted No es Administrador'); window.location= 'login'</script>";   
                }
            }
        } catch (Exception $e) {
            echo "<script> alert('Error al Ingresar'); window.location= 'login'</script>"; 
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

            DB::table('particular')->insert(
                ['rutParticular' => $rut,'nombreParticular' =>$nombre,'passwordParticular'=>$password,'emailParticular'=> $email,'rutParticular'=> $rut,'direccionParticular' => $direccion]);

            $users = DB::table('particular')->select('codigoParticular')
                ->where('rutParticular', $rut)
                ->first();

            DB::table('telefono')->insert(
                ['numeroTelefono'=> $telefono,'Particular_codigoParticular' => $users->codigoParticular]);

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

    public function listar(){
        $clientes=particular::where('Activo','A')->get();
        return view('administrador/mantenedorCliente',compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if(Session::get('uss') == 0 || Session::get('uss') != null ){
            if(Session::get('uss') == 1){
                $cliente = particular::where('codigoParticular',$request->input('id'))->first();
                $rutParticular = $cliente->rutParticular;
                return view('administrador/editarParticular',compact('cliente','rutParticular'));
            }else{
                $mensaje = 'No tiene Permisos';
                return view('analisis/index',compact('mensaje'));
            }
        }else{
            return view('analisis/login');   
        }
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

        Particular::where('codigoParticular',$request->get('id'))
            ->update(['rutParticular' => $request->get('rut'),'nombreParticular'=> $request->get('nombre'),'direccionParticular'=> $request->get('direccion'),'emailParticular'=> $request->get('email')]);

        $clientes=particular::where('Activo','A')->get();  
        return view('administrador/indexAdministrador',compact('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Particular::where('codigoParticular',$request->get('id'))
            ->update(['Activo' => 'D']);

        $clientes=particular::where('Activo','A')->get();  
        return view('administrador/indexAdministrador',compact('clientes'));
    }
}
