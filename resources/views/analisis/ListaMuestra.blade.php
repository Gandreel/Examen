@extends('analisis.layout.template')
@section('title', 'Lista Muestra')
@section('contenido')
	
	<div class="cuerpo-Listar">
		<table>
			<thead>
				<tr>
					<th>Codigo de Usuario</th>
					<th>Codigo de Muestra</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($datos as $muestra)
					<tr>
						<td>{{ $muestra->Particular_codigoParticular}}</td>
						<td>{{ $muestra->idAnalisisMuestras}}</td>
						<td></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection