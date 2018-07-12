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
            <th>Rut</th>   
            <th>Nombre</th>
            <th>categoria</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($empleados as $empleado)
          <tr>
            <td>{{$empleado['rutEmpleado']}}</td>
            <td>{{$empleado['nombreEmpleado']}}</td>
            <td>{{$empleado['categoria']}}</td>
            
            <td>
              <form action="{{URL::to('edit3')}}" method="post">
                <input type="submit" class="" value="Edit">
                <input type="hidden" name="id"  class="btn btn-danger" value="{{$empleado['rutEmpleado']}}"/>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
              </form>
            </td>
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
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>