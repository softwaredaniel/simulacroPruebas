<!-- Extiende pagina AdminLte -->
@extends('adminlte::page')

<!-- Da el titulo a la Pestaña del navegador -->
@section('title', 'Admin')

@section('plugins.sweetalert2', true)

<!-- Titulo principal del ingreso-->
@section('content_header')
    <h1>Dashboard Administrativo</h1>
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
                
                    <p style="margin-left: 10px;">Este es el panel del administrador, consta de 3 secciones,
                         la primera seccion es donde podra ver y agregar usuarios a la base de datos y eliminarlos, 
                         la segunda seccion es donde podra ver las preguntas y elimarlas, la ultima seccion es para ver las pruebas en base a las preguntas que usted puede crear.</p>

            </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Usuarios Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <a href="app/usuarios" class="small-box-footer">
                            Ver Usuarios <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
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
                        <a href="app/preguntas" class="small-box-footer">
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
