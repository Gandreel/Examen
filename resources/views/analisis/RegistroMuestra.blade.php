@extends('analisis.layout.template')
@section('title', 'Registro Muestra')
@section('contenido')
<div class="muestra_titulo">
    <h3>Registro de las Muestras</h3>
</div>
<div class="row">
    <div class="alert alert-success col-5 cont">
        Codigo del Cliente: {{$resultado->idAnalisisMuestras}}
    </div>
    <div class="col-1"></div>
    <div class="alert alert-success col-5 cont">
        Codigo de la Muestra: {{$analisis->Particular_codigoParticular}}
    </div>
    <form action="{{URL::to('edit')}}" method="post">
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
                        <td><input class="text2" type="text" name="txtMicrotoxinas" required/></td>
                    </tr>
                    
                    
                    <tr>
                        <td>Metales Pesados</td>
                        <td><input class="text2" type="text" name="txtMetalesPesados" required/></td>
                    </tr>
                    
                    <tr>
                        <td>Pesticidas</td>
                        <td><input class="text2" type="text" name="txtpestisidas" required/></td>
                    </tr>
                    <tr>
                        <td>Marea roja</td>
                        <td><input class="text2" type="text" name="txtpestisidas" required/></td>
                    </tr>
                    
                    <tr>
                        <td>BActerias Nocivas</td>
                        <td><input class="text2" type="text" name="txtpestisidas" required/></td>
                    </tr>
                    
                    
                    <tr>
                        <td>Rut Analizador</td>
                        <td><input class="text2" type="text" name="txtRut" required/></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <input class="boton" type="submit" value="Guardar Analisis" name="boton" style="width: 150px;"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" name="id" value="{{$resultado->idAnalisisMuestras}}"/>
        <input type="hidden" name="tipo" value="{{$resultado->idTipoAnalisis}}"/>
    </form>
</div>
@endsection