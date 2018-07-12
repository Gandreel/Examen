@extends('administrador.layout.template')
@section('title', 'mantenedorParticular')
@section('contenido')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mantenedor</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
  </head>
  <body>
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Email</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach($clientes as $cliente)
          <tr>
            <td>{{$cliente['codigoParticular']}}</td>
            <td>{{$cliente['rutParticular']}}</td>
            <td>{{$cliente['nombreParticular']}}</td>
            <td>{{$cliente['direccionParticular']}}</td>
            <td>{{$cliente['emailParticular']}}</td>

            <td>
              <form action="{{URL::to('edit2')}}" method="post">
                <input type="submit" class="btn btn-warning" value="Edit">
                <input type="hidden" name="id" value="{{$cliente['codigoParticular']}}"/>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
              </form>
            </td>
            <td>
<<<<<<< HEAD

              @csrf
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger" type="submit">Delete</button>
=======
            </form>
            <form action="{{URL::to('destroy')}}" method="post">
              <input type="submit" class="btn btn-danger" value="delete">
                <input type="hidden" name="id" value="{{$cliente['codigoParticular']}}"/>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
>>>>>>> 26d1c51e1a99614510a6e16965e4158c3c3911d3
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
@endsection
