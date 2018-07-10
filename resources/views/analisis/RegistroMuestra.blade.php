@extends('analisis.layout.template')
@section('title', 'Registro Muestra')
@section('contenido')
<div class="muestra_titulo">
    <h3>Registro de las Muestras</h3>
</div>
<input class="text" type="text" placeholder="Codigo del cliente: ">
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