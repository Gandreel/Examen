<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }} ">
</head>
<body>
    <div class="contenedor-form">
        <div class="toggle">
            <span id="p1">No Presionar</span>
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="{{URL::to('loger')}}" method="post">
                <input type="text" name="username" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            </form>
        </div>
        <div class="reset-password">
            <a href="{{ URL::to('registro') }}">Registrarse</a>
        </div>

        <div class="formulario">
            <h2>Te Lo dije Porfiado</h2>
        </div>

    </div>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>    
    <script src="{{ asset('js/main2.js') }}"></script>
</body>
</html>