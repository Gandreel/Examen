<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
							<a class="nav-item nav-link" href="#">Inicio</a>
							<a class="nav-item nav-link" href="#">Cliente</a>
							<a class="nav-item nav-link" href="#">Intranet</a>
						</nav>
					</div>
				</div>
			</div>
			<!-- CUERPO  -->
			<div class="container-fluid cuerpo">
				@yield('contenido')
			</div>
			
			<!-- FOOTER  -->
			<div class="container-fluid footer">
				<div class="icon">
					
				</div>
				<div class="link">
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link active" href="#">Active</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
					</ul>
				</div>
				<div class="registrado">
					
				</div>
			</div>
		</div>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>