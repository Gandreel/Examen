@extends('analisis.layout.template')
@section('title', 'Busqueda Muestra')
@section('contenido')
<div class="muestra_titulo">
	<h3>Busqueda Muestras</h3>
	<h5 class="alert alert-light">Escribe el codigo de la muestra a buscar</h5>
</div>
<div class="cuerpo-Listar">
	
	<div class="col-4" style="margin: 0 auto;">
		<form action="{{ URL::to('show') }}" method="post">
			<input type="text" class="text3" placeholder="Codigo de muestra" name="txtCodigoMuestra">
			<button type="submit" name="boton" class="boton5">Buscar</button>
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		</form>
	</div>
	<div class="col-4" style="margin: 0 auto;">
		<table>
			<thead>
				<tr>
					<th style="width: 40%;">Codigo de la muestra</th>
					<th>Estado</th>
				</tr>
			</thead>
			<tbody>
				@foreach($datos as $mue)
				<tr>
					<td>
						{{ $mue->idAnalisisMuestras }}
					</td>
					<td style="text-align: center;">
						@if($mue->estado == 1)
						<h6>
						<form action="{{URL::to('resultado')}}" method="post">
							<button type="submit" class="boton2">Terminado</button>
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							<input type="hidden" name="id" value="{{$mue->idAnalisisMuestras}}"/>
						</form>
						</h6>
						@else
						<h6>En proceso</h6>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if($mensaje != null)
		<div class="alert alert-warning" role="alert">
			{{ $mensaje }}
		</div>
		@endif
	</div>
</div>
@endsection