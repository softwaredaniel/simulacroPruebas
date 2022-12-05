<!-- Extiende pagina AdminLte -->
@extends('adminlte::page')

<!-- Da el titulo a la Pestaña del navegador -->
@section('title', 'Auditor')

@section('plugins.sweetalert2', true)

<!-- Titulo principal del ingreso-->
@section('content_header')
    <h1>Dashboard Auditor</h1>
@stop

<!-- Contenido principal del ingreso -->
@section('content')
            <div class="card card-outline card-primary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="margin-left: 10px;"> {{ __(' Bienvenido ') }}
                    {{ Auth::user()->nombre}}
                    {{ Auth::user()->apellido}}
                    </p>    
                
                    <p style="margin-left: 10px;">En esta vista podras realizar auditorias de las preguntas y consultar resultados de las pruebas </p>
            </div>
         
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Banco de Preguntas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-list-alt"></i>
                        </div>
                        <a href="app/resultados" class="small-box-footer">
                            Ver Preguntas <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>5</h3>
                            <p>Pruebas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="app/prueba" class="small-box-footer">
                            Ver Pruebas <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            
@stop
<!-- Fonts -->
@section('css')

@stop

@section('js')
<script>
        Swal.fire(
        'Bienvenido Sr Auditor!',
        )

</script>
@stop