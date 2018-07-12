<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
		<link href="{{asset('css/estilo.css')}}" rel="stylesheet" type="text/css" media="all"/>
	</head>
	<body>
		<div class="container-fluid">
			<!-- NAVEGADOR  -->
			<div class="header">
				<div class="row">
					<div class="col-1">
						
					</div>
					<div class="titulo col-3">
						<h3>Instituto de Salud Pública</h3>
					</div>
					<div class="nav col-8">
						<nav class="nav justify-content-end">
							<a class="nav-item nav-link" href="{{URL::to('inicio')}}">Inicio</a>
							<a class="nav-item nav-link" href="{{URL::to('registro')}}">Cliente</a>
							<a class="nav-item nav-link" href="{{URL::to('#')}}">Trabajador</a>
							<a class="nav-item nav-link" href="{{URL::to('recepcion')}}">Recepcion</a>
							<a class="nav-item nav-link" href="{{URL::to('procesar')}}">Lista Mue</a>
							<a class="nav-item nav-link" href="{{URL::to('buscar')}}">Busqueda Mue</a>
							<a class="nav-item nav-link" href="{{URL::to('resultado')}}">Resultado Mue</a>

							<a class="nav-item nav-link" href="{{URL::to('out')}}">Salir</a>
						</nav>
					</div>
				</div>
			</div>
			<!-- CUERPO  -->
			<div class="cuerpo">
				@yield('contenido')
			</div>
			
			<!-- FOOTER  -->
			<div class="footer">
				<div class="nav justify-content-center">
						<li class="nav-item">
							<a href="https://www.instagram.com/?hl=es-la"><img src="{{asset('img/instagram.png')}}"></a>
						</li>	
						&nbsp;
						&nbsp;
						<li class="nav-item">
							<a href="https://www.snapchat.com/l/es/"><img src="{{asset('img/snapchat.png')}}"></a>
						</li>	
						&nbsp;
						&nbsp;
						<li class="nav-item">
							<a href="https://twitter.com/"><img src="{{asset('img/twitter.png')}}"></a>
						</li>	
						&nbsp;
						&nbsp;
						<li class="nav-item">
							<a href="https://www.facebook.com/"><img src="{{asset('img/facebook.png')}}"></a>
						</li>					
				</div>
				<div class="link">
					<ul class="nav justify-content-center">
						
						<li class="nav-item">
							<a class="nav-link" href="{{URL('inicio')}}">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Servicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL('registro')}}">Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Politica de Privacidad</a>
						</li>						
					</ul>
				</div>
				<div class="registrado">
					<h6 class="form disabled">ISP @ 2018</h6>
				</div>
			</div>
		</div>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>