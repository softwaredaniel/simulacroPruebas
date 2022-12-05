<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--Style-->
        @vite(['resources/sass/styles.css'])

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

<!-- Extiende pagina AdminLte -->
@extends('adminlte::page')

<!-- Da el titulo a la Pestaña del navegador -->
@section('title', 'Admin')

@section('plugins.sweetalert2', true)

<!-- Titulo principal del ingreso-->
@section('content_header')
    <h1>Pruebas</h1>
@stop

<!-- Contenido principal del ingreso -->
@section('content')
            <div class="card card-outline card-primary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="margin-left: 10px;"> {{ __(' Estadisticas y Resultados ') }}
                    </p>    
                
                    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Pruebas Resueltas</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 396px;" width="495" height="312" class="chartjs-render-monitor"></canvas>
</div>
<table>
<th>id</th>
<th>fecha</th>
<th>puntaje</th>
<th>Preguntas</th>
<th>Respuestas</th>
<th>Usuario</th>
<tr>
@foreach ($pruebas as $item)
    <td>{{$item->id}}</td>
    <td>{{$item->fecha}}</td>
    <td>{{$item->puntaje}}</td>

    <td>{{$item->relacionPruebaRespuesta->respuesta}}</td>
    <td>{{$item->relacionUser->respuesta}}</td>
</tr>
@endforeach
</table>
</div>
<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">Estadisticas por Pruebas</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 396px;" width="495" height="312" class="chartjs-render-monitor"></canvas>
</div>

</div>

</div>

            </div>
@stop
<!-- Fonts -->
@section('css')

@stop

@section('js')
<script>
       /* Swal.fire(
        'Bienvenido A su Plataforma!',
        )
        */
</script>
@stop