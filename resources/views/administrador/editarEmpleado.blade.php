<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edicion Empleado </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
      <form method="post" action="{{URL::to('update2')}}">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="rut">Rut:</label>
            <input type="text" class="form-control" name="rut" value="{{$empleado->rutEmpleado}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$empleado->nombreEmpleado}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="categoria">categoria:</label>
            <input type="text" class="form-control" name="categoria" value="{{$empleado->categoria}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="id" value="{{$empleado->rutEmpleado}}"/>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>