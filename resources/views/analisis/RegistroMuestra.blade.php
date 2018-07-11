@extends('analisis.layout.template')
@section('title', 'Registro Muestra')
@section('contenido')
<div class="muestra_titulo">
    <h3>Registro de las Muestras</h3>
</div>
<div class="alert alert-success col-6" role="alert">
    @if($datos->idAnalisisMuestras != null || $datos->idAnalisisMuestras == '')
        Codigo del Cliente: {{ $datos->idAnalisisMuestras }}
    @elseif($datos->Empresa_codigoEmpresa != null || $datos->Empresa_codigoEmpresa == '')
        Codigo de la Empresa: {{ $datos->Empresa_codigoEmpresa }}
    @endif
</div>

<div class="alert alert-success col-6" role="alert">
    @if($datos->Particular_codigoParticular != null || $datos->Particular_codigoParticular == '')
        Codigo de Muestra: {{ $datos->Particular_codigoParticular }}
    @elseif($datos->Empresa_codigoEmpresa != null || $datos->Empresa_codigoEmpresa == '')
        Codigo de Muestra: {{ $datos->Empresa_codigoEmpresa }}
    @endif
</div>

<input class="text" type="text" placeholder="Codigo de la muestra: ">
<div class="col-6">
    <h5>Tipo de Analisis</h5>
    <label>Microtoxinas</label>
    <label>Metales Pesados</label>
</div>
<div class="col-8">
    <h5>PPM de la muestra</h5>
    <input class="text" type="text" name="txtMicrotoxinas" />
    <input class="text" type="text" name="txtMetalesPesados" />
    <input class="boton" type="submit" value="Guardar Análisis" name="btnGuardarAnalisis" />
    @endsection