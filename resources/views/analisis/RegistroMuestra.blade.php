@extends('analisis.layout.template')
@section('title', 'Registro Muestra')
@section('contenido')	
	
    <h3>Registro de las Muestras</h3>
    <input class="text" type="text" placeholder="Código del cliente: ">
    <input class="text" type="text" placeholder="Código de la muestra: ">
    
        <div class="col-6">
            <h5>Tipo de Análisis</h5>
            <label>Microtoxinas</label>
            <label>Metales Pesados</label>
        </div>
        <div class="col-8">
            <h5>PPM de la muestra</h5>
            <input class="text" type="text" name="txtMicrotoxinas" />
            <input class="text" type="text" name="txtMetalesPesados" />
            <input class="boton" type="submit" value="Guardar Análisis" name="btnGuardarAnalisis" />           
@endsection