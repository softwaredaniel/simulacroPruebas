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

                    <p style="margin-left: 10px;"> {{ __(' Aministración de Pruebas ') }}
                    </p>    
                
                    @foreach($datos as $valor)
                    {!!$valor->id!!}
                    {!!$valor->pregunta!!}
                    <p>Respuestas</p>
                    
                    <li>{{$valor->relacion->respuesta }}</li>
                   
                    @endforeach
                  
                    
                   

            </div>
@stop
@section('js')
<script>
$("#select").onchange(function(){
    $.ajax({url: "/test.php?id=".$(this).attr("id"), success: function(result){
        $("#input_1").val(result.precio);
        $("#input_2").html(result.especialidad);
    }});
});
</script>
@stop
