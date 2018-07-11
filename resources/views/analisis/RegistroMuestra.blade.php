@extends('analisis.layout.template')
@section('title', 'Registro Muestra')
@section('contenido')
<div class="muestra_titulo">
    <h3>Registro de las Muestras</h3>
</div>
<div class="row">
    <div class="alert alert-success col-5 cont">
        @foreach($datos as $muestra)
        Codigo del Cliente: {{$muestra->idAnalisisMuestras}}
        @endforeach
    </div>
    <div class="col-1"></div>
    <div class="alert alert-success col-5 cont">
        @foreach($datos as $muestra)
        Codigo de la Muestra: {{$muestra->Particular_codigoParticular}}
        @endforeach
    </div>
    <form action="{{URL::to('create')}}" method="post">
        <div class="col-12 dav">
            <table class="tablita">
                <thead>
                    <tr>
                        <th>Tipo de Analisis</th>
                        <th>PPM de muestra</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mitocondrias</td>
                        <td><input class="text2" type="text" name="txtMicrotoxinas"/></td>
                    </tr>
                    <tr>
                        <td>Metales Pesados</td>
                        <td><input class="text2" type="text" name="txtMetalesPesados"/></td>
                    </tr>
                    <tr>
                        <td>Pesticidas</td>
                        <td><input class="text2" type="text" name="txtpestisidas"/></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <input class="boton3" type="submit" value="Guardar Analisis" name="boton"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </form>
</div>
@endsection