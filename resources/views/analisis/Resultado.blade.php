@extends('analisis.layout.template')
@section('title', 'Resultado Muestra')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Tipo Muestra", "Cantidad", { role: "style" } ],
        ["Copper", 8.94, "red"],
        ["Silver", 10.49, "blue"],
        ["Gold", 19.30, "green"]
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Resultado de Analisis de muestra N°:",
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
	
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>   

@endsection