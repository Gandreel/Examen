@extends('analisis.layout.template')
@section('title', 'Registro Muestra')
@section('contenido')	
	
    <h3>Registro de las Muestras</h3>
    <input class="text" type="text" placeholder="C�digo del cliente: ">
    <input class="text" type="text" placeholder="C�digo de la muestra: ">
    
        <div class="col-6">
            <h5>Tipo de An�lisis</h5>
            <label>Microtoxinas</label>
            <label>Metales Pesados</label>
        </div>
        <div class="col-8">
            <h5>PPM de la muestra</h5>
            <input class="text" type="text" name="txtMicrotoxinas" />
            <input class="text" type="text" name="txtMetalesPesados" />
            <input class="boton" type="submit" value="Guardar An�lisis" name="btnGuardarAnalisis" />           
@endsection