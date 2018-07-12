<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
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
        
        <td><a href="{{action('ParticularController@edit', $cliente['rutParticular'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>