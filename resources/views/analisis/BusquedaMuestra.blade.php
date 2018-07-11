@extends('analisis.layout.template')
@section('title', 'Busqueda Muestra')
@section('contenido')

<div class="muestra_titulo">
  <h3>Busqueda Muestras</h3>
	<h5 color= "gray">Escribe el codigo de la muestra a buscar</h5>
</div>
<div class="cuerpo-Listar">
	<table>
			<tr>
				<td><input type="text" placeholder="Codigo de muestra" name="txtCodigoMuestra"></td>
				<button type="submit" name="boton" class="boton2" value="{{$muestra->idAnalisisMuestras}}">Buscar</button>
			</tr>
			<thead>
				<tr>
					<th>Codigo de la muestra</th>
					<th>Estado</th>
				</tr>
			</thead>
			<tbody>
				@foreach($datos as $muestra)
				<tr>
					<td>{{ $muestra->idAnalisisMuestras}}</td>
					<td>{{ $muestra->estado}}</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</div>
@endsection
