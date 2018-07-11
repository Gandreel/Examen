@extends('analisis.layout.template')
@section('title', 'Recepcion Muestra')
@section('contenido')

<form action="muestra" method="post">
<div class="muestra_titulo">
  <h3>Recepcion de Muestras</h3>
</div>
<div class="muestra_cuerpo">
  <div class="row">
    <div class="col-6">
      <input class="text search" type="text"
      style="background-image: url('{{asset('img/buscar.png')}}'); background-position: right;background-repeat: no-repeat;"
      placeholder="Codigo Cliente" name="txtCodigo" required>
      <input class="text" type="text" placeholder="Rut Cliente" name="txtRut" required>
      <input class="text" type="text" placeholder="Nombre Cliente" name="txtNombre" required>
      <input class="text" type="text" placeholder="rut empleado" name="txtRutEmpleado" required>
    </div>
    <div class="col-6">
      <h5>Fecha de Recepcion</h5>
      <input class="text" type="date" placeholder="Fecha" name="dateFecha" min="{{ Date('Y-m-d') }}" required>
      <input class="text" type="text" placeholder="Temperatura Muestra" name="txtTemperatura" required>
      <input class="text" type="text" placeholder="Canridad Muestra" name="txtCantMuestra" required>
    </div>
    <div class="col-8">
      <h5>Tipo de analisis a realizar</h5>
      <select class="text" name="Tipo de Analisis">
        <option value="C01">Microtoxinas</option>
        <option value="C02"></option>
        <option value="C03"></option>
      </select>
      <input class="boton" type="submit" value="Agregar" name="btnAgregar"/>
      <textarea name="txtDescripcion" class="textArea" placeholder="Descripcion"></textarea>
      <input class="boton" type="submit" value="Guardar" name="btnGuardar" />
      <input class="boton" type="submit" value="Salir" name="btnSalir" />
    </div>
  </div>
  
</div>
</form>
@endsection