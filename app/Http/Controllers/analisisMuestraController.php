<?php

namespace analisis\Http\Controllers;

use analisis\TipoAnalisis;
use analisis\AnalisisMuestra;

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
        $datos = TipoAnalisis::all();
        return view('analisis/RecepcioMuestra',compact('datos'));
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

    public function buscar()
    {
        $mensaje = null;
        $datos = AnalisisMuestra::all();
        return view('analisis/BusquedaMuestra',compact('datos','mensaje'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $mensaje = null;
        try {
            $datos = DB::table('analisismuestras')
                ->where('idAnalisisMuestras', $request->input('txtCodigoMuestra'))
                ->first();

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
