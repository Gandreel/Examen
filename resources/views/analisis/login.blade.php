<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Iniciar Sesión</title>
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
		<link href="{{asset('css/estilo.css')}}" rel="stylesheet" type="text/css" media="all"/>
	</head>
	<body background="{{asset('img/fondoLogin.jpg')}}">
		<form action="{{URL::to('loger')}}" method="post">
			<div>
				<center>
				<h1 style="color:#FFFFFF">Login de Usuario</h1>
				&nbsp;
				<table class='gridtable'>
					<tr>
						<td style="color:#FFFFFF">USUARIO: </td>
						<td>
							<input name="username" type="text" id="username" required>
						</td>
					</tr>
					<tr>
						<td style="color:#FFFFFF">PASSWORD: </td>
						<td>
							<input name="password" type="password" id="password" required>
						</td>
					</tr>
					<tr>
						<td style="color:#FFFFFF">INGRESAR: </td>
						<td align=center>
							<input style="font-weight:bold" type="submit" name="Submit" value="Login"">
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						</td>
					</tr>
				</table>
				</center>
			</div>
		</form>
	</body>
</html>