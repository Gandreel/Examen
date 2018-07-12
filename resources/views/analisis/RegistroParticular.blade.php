@extends('analisis.layout.template')
@section('title', 'Registro')
@section('contenido')
<div style="background-color: #EFF2FB; padding: 25px;" class="container-fluid">
	<div class="container" style="background-color: #fff;">
		<div class="row">
			<div class="col-6">
				<img class="card-img-top" src="{{asset('img/Registrar_cliente.jpg')}}" height="450px" width="300px" alt="Card Image cap">
			</div>
			<div class="col-6">
				<form method="post" action="{{URL::to('store2')}}">
					<table class="tabla">
						<thead>
							<th><h4>Registro del Cliente</h4></th>
						</thead>
						<tbody>
							<tr>
								<td>
									<input type="text" class="text2" placeholder="Rut" name="txtRut"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="text2" placeholder="Nombre" name="txtNombre"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="text2" placeholder="Direccion" name="txtDir"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="password" class="text2" placeholder="Password" name="txtPassword"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="text2" placeholder="Email" name="txtEmail"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="text2" placeholder="Telefono" name="txtTelefono"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="chkAceptar"> <label>Acepto los terminos</label> <br>
								</td>
							</tr>
							<tr>
								<td>
									<button type="submit" name="boton" class="boton4">Registrarse</button>
									<input type="hidden" name="_token" value="{{csrf_token()}}"/>
								</td>
							</tr>
							<tr>
								<td>
									<label>¿Ya tienes una cuenta? </label><a href="{{URL::to('login')}}"> Ingresar </a>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection