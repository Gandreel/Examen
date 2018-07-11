@extends('analisis.layout.template')
@section('title', 'Busqueda Muestra')
@section('contenido')

<div class="muestra_titulo">
  <h3>Busqueda Muestras</h3>
	<h5 color= "gray">Escribe el codigo de la muestra a buscar</h5>
</div>
<div class="cuerpo-Listar">
	<input type="text" placeholder="Codigo de muestra" name="txtCodigoMuestra">
	<button type="submit" name="boton" class="boton">Buscar</button>
	<table>
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
					<td>@if($muestra->estado == 0)
							Procesando
							@else
							Termiando
							@endif</td>
					<td>{{ $muestra->estado}}</td>
					<td>@if($muestra->estado == 0)
									Procesando
									@else
									Termiando
									@endif</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</div>
@endsection
