@extends('analisis.layout.template')
@section('title', 'Registro')
@section('contenido')
<div class="RegistroParticular-cuerpo">
	<table>
		<tbody>
			<tr>
				<td>
					<div class="card" style="margin-left: 50px">
						<img class="card-img-top" src="{{asset('img/Registrar_cliente.jpg')}}" height="400px" alt="Card Image cap" width="200px">
					</div>
				</td>
				<td>
					<div align="rigth" style="margin-left: 50px">
						<h4>Registro del Cliente</h4>
						<form method="post" action="{{URL::to('store')}}">
							<input type="text" placeholder="Rut" name="txtRut"> <br><br>
							<input type="text" placeholder="Nombre" name="txtNombre"> <br><br>
							<input type="password" placeholder="Password" name="txtPassword"> <br><br>
							<input type="text" placeholder="Email" name="txtEmail"> <br><br>
							<input type="text" placeholder="Telefono" name="txtTelefono"> <br><br>
							<input type="checkbox" name="chkAceptar"> <label>Acepto los terminos</label> <br><br>	
							<button type="submit" name="boton" class="boton4">Registrarse</button>
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						</form>
						<label>Ya tienes una cuenta? </label><a href="{{URL::to('login')}}"> Ingresar </a>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection