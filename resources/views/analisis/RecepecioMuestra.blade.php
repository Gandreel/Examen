<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <link rel="stylesheet" href="">
</head>

<body>
  <h1 align="center">Recepcion de Muestras</h1>
  <div>
    <ul>
      <li><input type="text" placeholder="Codigo Cliente" name="txtCodigo" required></li>
      <li><input type="text" placeholder="Rut Cliente" name="txtRut" required></li>
      <li><input type="text" placeholder="Nombre Cliente" name="txtMombre" required></li>
    </ul>
  </div>
  <div>
    <label>Fecha de Recepcion</label>
    <ul>
      <li><input type="date" placeholder="Fecha" name="dateFecha" required></li>
      <li><input type="text" placeholder="Temperatura Muestra" name="txtTemperatura" required></li>
      <li><input type="text" placeholder="Canridad Muestra" name="txtCantMuestra" required></li>
    </ul>
  </div>
  <div>
    <label>Tipo de análisis a realizar</label>
    <ul>
	 <li><select name="Tipo de Análisis"></li>
 		 <option value="C01">Microtoxinas</option>
 		 <option value="C02"></option>
 		 <option value="C03"></option>
	</select>
      	<li><input type="submit" value="Agregar" name="btnAgregar" /></li>
	<li><input type="text" placeholder="Descripcion" name="txtDescripcion" /></li>
      	<li><input type="submit" value="Guardar" name="btnGuardar" />
        <input type="submit" value="Salir" name="btnSalir" /></li>
    </ul>
  </div>
</body>
</head>
</html>