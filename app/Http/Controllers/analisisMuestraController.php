<?php

namespace analisis\Http\Controllers;

use analisis\TipoAnalisis;
use analisis\AnalisisMuestra;
use analisis\ResultadoAnalisis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class analisisMuestraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::get('uss') != 0 || Session::get('uss') != null ){
            $mensaje = null;
            return view('analisis/index',compact('mensaje'));
        }else{
            return view('analisis/login');   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Session::get('uss') == 0 || Session::get('uss') != null ){
            if(Session::get('uss') == 2){
                $datos = TipoAnalisis::all();
            $mensaje = null;
            return view('analisis/RecepcioMuestra',compact('datos','mensaje'));
            }else{
                $mensaje = 'No tiene Permisos';
                return view('analisis/index',compact('mensaje'));
            }
        }else{
            return view('analisis/login');   
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
        $fecha = $request->input('dateFecha');
        $temperatura = $request->input('txtTemperatura');
        $cantidad = $request->input('txtCantMuestra');
        $rutEmpresa = $request->input('txtRut');
        $rutEmpleado = $request->input('txtEmpleado');
        $tipo = $request->input('Tipo_Ana');

        echo $tipo;

        try {
            DB::table('analisismuestras')->insert(
                ['FechaRecepcion'=>$fecha,'temperaturaMuestra'=>$temperatura,'cantidadMuestra'=>$cantidad,'Particular_codigoParticular'=>$rutEmpresa,'rutEmpleadoRecibe'=>$rutEmpleado]);

            $anali = DB::table('analisismuestras')
                ->where('Particular_codigoParticular', $rutEmpresa)
                ->orWhere('rutEmpleadoRecibe',$rutEmpleado)
                ->orWhere('cantidadMuestra',$cantidad)
                ->orWhere('FechaRecepcion',$fecha)
                ->orWhere('temperaturaMuestra',$temperatura)
                ->first();

            DB::table('resultadoanalisis')->insert(['idTipoAnalisis' => $tipo, 'idAnalisisMuestras' => $anali->idAnalisisMuestras,'FechaRegistro' => $fecha, 'PPM' => 0 , 'estado' => 0 ]);

            $datos = TipoAnalisis::all();
            $mensaje = "Creado Correctamente";
            return view('analisis/RecepcioMuestra',compact('datos','mensaje')); 
            
        } catch (Exception $e) {
            try {
                DB::table('analisismuestras')->insert(
                    ['FechaRecepcion'=>$fecha,'temperaturaMuestra'=>$temperatura,'cantidadMuestra'=>$cantidad,'Empresa_codigoEmpresa'=>$rutEmpresa,'rutEmpleadoRecibe'=>$rutEmpleado]);

                $anali = DB::table('analisismuestras')
                ->where('Particular_codigoParticular', $rutEmpresa)
                ->orWhere('rutEmpleadoRecibe',$rutEmpleado)
                ->orWhere('cantidadMuestra',$cantidad)
                ->orWhere('FechaRecepcion',$fecha)
                ->orWhere('temperaturaMuestra',$temperatura)
                ->first();

                DB::table('resultadoanalisis')->insert(['idTipoAnalisis' => $tipo, 'idAnalisisMuestras' => $anali->idAnalisisMuestras,'FechaRegistro' => $fecha , 'PPM' => 0 , 'estado' => 0 ]);

                $datos = TipoAnalisis::all();
                $mensaje = "Creado Correctamente";
                return view('analisis/RecepcioMuestra',compact('datos','mensaje'));
                    
            } catch (Exception $e) {
                            
            }            
        }
    }

    public function ListaMuestra(){
        if(Session::get('uss') != 0 || Session::get('uss') != null ){
            if(Session::get('uss') == 3){
            $datos = DB::table('resultadoanalisis')
            ->join('analisismuestras', 'analisismuestras.idAnalisisMuestras', '=', 'resultadoanalisis.idAnalisisMuestras')
            ->select('analisismuestras.*', 'resultadoanalisis.estado')
            ->get();
            $mensaje = null;
            return view('analisis/ListaMuestra',compact('datos','mensaje'));
            }else{
                $mensaje = 'No tiene Permisos';
                return view('analisis/index',compact('mensaje'));
            }    
        }else{
            return view('analisis/login'); 
        }
        
    }

    public function RegistroMuestra(){
        if(Session::get('uss') != 0 || Session::get('uss') != null ){
            return view('analisis/RegistroMuestra');
        }else{
            return view('analisis/login');   
        }
        
    }
    public function resultadoMuestra(Request $request){
        $id = $request->input('id');
        $tipo = TipoAnalisis::all();
        $resultado = ResultadoAnalisis::where('idAnalisisMuestras',$id)->first();
        return view('analisis/Resultado',compact('resultado','tipo'));        
    }

    public function store3(Request $request){

        $analisis = AnalisisMuestra::where('idAnalisisMuestras',$request->input('boton'))
            ->first();

        $resultado = ResultadoAnalisis::where('idAnalisisMuestras',$analisis->idAnalisisMuestras)
            ->first();

            return view('analisis/RegistroMuestra',compact('analisis','resultado'));
    }

    public function buscar()
    {
        if(Session::get('uss') != 0 || Session::get('uss') != null ){
            if(){
            $mensaje = null;
            $datos = DB::table('resultadoanalisis')
            ->join('analisismuestras', 'analisismuestras.idAnalisisMuestras', '=', 'resultadoanalisis.idAnalisisMuestras')
            ->select('analisismuestras.*', 'resultadoanalisis.estado')
            ->get();
            return view('analisis/BusquedaMuestra',compact('datos','mensaje'));
            }else{

            }
        }else{
            return view('analisis/login');   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        try {
            $mensaje = null;
            $id = $request->input('txtCodigoMuestra');
            if($id == ''){
                $datos = AnalisisMuestra::all();
                return view('analisis/BusquedaMuestra',compact('datos','mensaje')); 
            }
            
            $datos = AnalisisMuestra::where('idAnalisisMuestras',$request->input('txtCodigoMuestra'))->get();

            return view('analisis/BusquedaMuestra',compact('datos','mensaje'));
        } catch (Exception $e) {
            $mensaje = 'Analisis No Encontrado';
            return view('analisis/BusquedaMuestra',compact('datos','mensaje'));
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
        $id = $request->input('id');
        $tipo = $request->input('tipo');
        $rut = $request->input('txtRut');
        $ppm = null;
        if($tipo == 2){
            $ppm = $request->input('txtMetalesPesados');
        }else if($tipo == 3){
            $ppm = $request->input('txtMicrotoxinas');
        }else if($tipo == 4){
            $ppm = $request->input('txtpestisidas');
        }

        ResultadoAnalisis::where('idAnalisisMuestras',$id)
            ->update(['PPM' => $ppm,'estado'=>1,'rutEmpleadoAnalista' => $rut]);


            $datos = DB::table('resultadoanalisis')
            ->join('analisismuestras', 'analisismuestras.idAnalisisMuestras', '=', 'resultadoanalisis.idAnalisisMuestras')
            ->select('analisismuestras.*', 'resultadoanalisis.estado')
            ->get();
            $mensaje = 'Guardado Exitosamente';
        return view('analisis/ListaMuestra',compact('datos','mensaje'));
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
