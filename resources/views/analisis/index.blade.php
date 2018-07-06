@extends('analisis.layout.template')
@section('title', 'Inicio')
@section('contenido')
<div class="index-titulo">
	<h3>Noticias</h3>
	<p>
		Seccion de noticias para mantener a nuestros clientes actualizados, 

	</p>
</div>
<di class="row">
<div class="index-cuerpo">
	<table>
		<tbody>
			<tr>
				<td>
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="{{ asset('img/pc.jpg') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Nuevos Analisis</h5>
							<p class="card-text" style="text-align: center;">
								Tratando de mejorar nuestro servicio de analisis, nos hemos ampliado a nuevos tipos de analisis, para su beneficio.
							</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</td>
				<td>
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="{{ asset('img/edificio.jpg') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Nueva Sucursal</h5>
							<p class="card-text" style="text-align: center;">
								Para poder dar mayor comodidad a nuestros clientes se ha abrierto una nueva sucursal
								en la V region de Valparaiso.
							</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</td>
				<td>
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="{{ asset('img/oficina.jpg') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Servicio Mejorado</h5>
							<p class="card-text" style="text-align: center;">
								Tratando de ayudar a nuestros clientes, hemos acatualizados nuestros servicios
								para poder realizarse nuestra pagina web.
							</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</di>
@endsection