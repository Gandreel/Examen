<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible"/>
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
					<div class="titulo col-8">
						<h3>Instituto de Salud Pública</h3>
					</div>
					<div class="nav col-3">
						<nav class="nav justify-content-end">
							<a class="nav-item nav-link" href="{{URL('inicio')}}">Inicio</a>
							<a class="nav-item nav-link" href="{{URL('registro')}}">Cliente</a>
							<a class="nav-item nav-link" href="#">Intranet</a>
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
				<div class="icon">

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