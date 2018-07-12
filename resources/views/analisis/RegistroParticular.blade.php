<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    </head>
    <body>
        <div class="contenedor-form">
            <div class="toggle">
                <span id="p1">Empresa</span>
            </div>
            
            
            <div class="formulario">
                <h2>Registro Personas</h2>
                <form action="{{URL::to('store2')}}" method="post">
                    <input type="text" placeholder="Rut" name="txtRut">
                    <input type="text" placeholder="Nombre" name="txtNombre">
                    <input type="text" placeholder="Direccion" name="txtDir">
                    <input type="password" placeholder="Password" name="txtPassword">
                    <input type="text" placeholder="Email" name="txtEmail">
                    <input type="text" placeholder="Telefono" name="txtTelefono">
                    <input type="submit" value="Registrarse">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                </form>
                @if($mensaje != null)
                <label class="alert alert-warning">{{$mensaje}}</label>
                @endif
            </div>
            
            <div class="formulario">
                <h2>Registro Empresas</h2>
                <form action="{{URL::to('store4')}}" method="post">
                    <input type="text" placeholder="rut Empresa" name="txtRut" required>
                    
                    <input type="text" placeholder="Nombre Empresa" name="txtNombre" required>
                    
                    <input type="text" placeholder="Dirección" name="txtDir" required>
                    <input type="password" placeholder="Ingrese contaseña" name="txtPass" required>
                    <input type="text" placeholder="rut Contacto" name="txtRutC" required>
                    <input type="text" placeholder="Nombre Contacto" name="txtNombreC" required>
                    <input type="email" placeholder="example@email.com" name="txtEmail" required>
                    
                    <input type="text" placeholder="Teléfono" name="txtFono" required>
                    
                    <input type="submit" value="Registrarse">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                </form>
                @if($mensaje != null)
                <label class="alert alert-warning">{{$mensaje}}</label>
                @endif
            </div>
            <div class="reset-password">
                <a href="#">¿Ya tiene cuenta?</a>
            </div>
        </div>
        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>