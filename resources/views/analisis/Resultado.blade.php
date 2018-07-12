@extends('analisis.layout.template')
@section('title', 'Resultado Muestra')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Tipo Muestra", "Cantidad", { role: "style" } ],
        @foreach ($tipo as $t)
          ["{{ $t->nombre }}",
           @if($t->idTipoAnalisis == $resultado->idTipoAnalisis )
           {{ $resultado->PPM }}
           @else
           0
           @endif
          ,"{{$t->color}}"],
        @endforeach
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "RESULTADO ANALISIS MUESTRA {{ $resultado->idAnalisisMuestras }}",
        subtitle: 'hola',
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
@section('contenido')
	
<hr>
    <div class="row">
<div class="col-6 dav" id="columnchart_values" style="width: 900px; height: 300px;"></div>

<div class="col-6 dav"><table class="tablita">

            <th>Tipo de Analisis</th>
            <th>PPM de muestra</th>
            <br>
            <br>
    <hr>

        <tr>
            <td>Mitocondrias</td>
            <td><label class="text2"  name="txtMicrotoxinas" > </label></td>
        </tr>

        <tr>
            <td>Metales Pesados</td>
            <td><label class="text2" name="txtMetalesPesados" ></label></td>
        </tr>

        <tr>
            <td>Pesticidas</td>
            <td><label class="text2" name="txtpestisidas"></label></td>
        </tr>
        <tr>
            <td>Marea roja</td>
            <td><label class="text2" name="txtpestisidas" ></label></td>
        </tr>

        <tr>
            <td>BActerias Nocivas</td>
            <td><label class="text2" name="txtpestisidas" ></label></td>
        </tr>


</table></div>
</div>   

@endsection