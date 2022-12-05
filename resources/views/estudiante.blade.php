<!-- Extiende pagina AdminLte -->
@extends('adminlte::page')

<!-- Da el titulo a la Pestaña del navegador -->
@section('title', 'Estudiante')

@section('plugins.sweetalert2', true)

<!-- Titulo principal del ingreso-->
@section('content_header')
    <h1>Dashboard Estudiante</h1>
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
                
                    <p style="margin-left: 10px;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                    persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. 
                    Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
                    como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>5</h3>
                        <p>Presentar pruebas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <a href="app/prueba" class="small-box-footer">
                        Ver Pruebas <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
           
@stop
<!-- Fonts -->
@section('css')

@stop

@section('js')
<script>
        Swal.fire(
        'Bienvenido A su Plataforma!',
        )

</script>
@stop