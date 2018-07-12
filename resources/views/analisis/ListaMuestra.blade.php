@extends('analisis.layout.template')
@section('title', 'Lista Muestra')
@section('contenido')
<div class="muestra_titulo">
	<h3>Lista de muestras para procesar</h3>
</div>
<div class="cuerpo-Listar">
	<table style="background-color: #fff">
		<thead>
			<tr>
				<th>Codigo de Usuario</th>
				<th>Codigo de Muestra</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($datos as $muestra)
			@if($muestra->estado == 0)
			<tr>
				<td style="text-align: left;">{{ $muestra->Particular_codigoParticular}}</td>
				<td style="text-align: left;">{{ $muestra->idAnalisisMuestras}}</td>
				<td style="text-align: left;">
					<form method="post" action="{{URL::to('store3')}}">
						<button type="submit" name="boton" class="boton2" value="{{$muestra->idAnalisisMuestras}}">Procesar</button>
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					</form>
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
	@if($mensaje != null)
	<div class="alert alert-success" role="alert">
		{{ $mensaje }}
	</div>
	@endif
</div>
@endsection