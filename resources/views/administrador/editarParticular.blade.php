<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edicion Cliente </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
      <form method="post" action="{{URL::to('update')}}">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="rut">Rut:</label>
            <input type="text" class="form-control" name="rut" value="{{$cliente->rutParticular}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$cliente->nombreParticular}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="direccion">Direccion:</label>
            <input type="text" class="form-control" name="direccion" value="{{$cliente->direccionParticular}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-left:38px">
            <labelfor="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{$cliente->emailParticular}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="id" value="{{$cliente->codigoParticular}}"/>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>