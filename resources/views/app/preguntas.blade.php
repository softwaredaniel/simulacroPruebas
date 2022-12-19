<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" href="/css/admin_custom.css">
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
    <h1>Preguntas</h1>
@stop

<!-- Contenido principal del ingreso -->
@section('content')
            <div class="card card-outline card-primary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="margin-left: 10px;">Aministración de Preguntas
                    </p>    
            </div>    
            <div class="card card-outline card-primary">
              <div class="card-body">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Facultad</th>
                                    <th>Programa</th>
                                    <th>Asignatura</th>
                                    <th>Pregunta</th>
                                    <th>Niveles</th>
                                    <th>Respuesta</th>
                                    <th>Correcta</th>
                                    <th>Operaciones</th>
                                </tr>
                            </thead>
                           <tbody>
                            @foreach($preguntas as $datos)
                                <tr>
                                   
                                     <td>{{$datos->asignatura->relacionProgAsignaturas->relacionPro->descripcion}}</td>
                                   
                                  
                                    <td>{{$datos->asignatura->relacionProgAsignaturas->descripcion}}</td>
                                 
                                    <td>{{$datos->asignatura->descripcion}}</td>
                                    <td>{{$datos->pregunta}}</td>
                                    <td>
                                        @if($datos->nivel==1)
                                             <p>Nivel 1</p>
                                          @elseif($datos->nivel == 2)
                                             <p>Nivel 2</p>
                                          @elseif($datos->nivel == 3)
                                             <p>Nivel 3</p>
                                          @elseif($datos->nivel == 4)
                                             <p>Nivel 4</p>
                                          @elseif($datos->nivel == 5)
                                             <p>Nivel 5</p>
                                         @else 
                                             <p>Esta pregunta no tiene nivel asignado</p>
                                        @endif
                                       
                                     </td>
                                     <td><li>{{$datos->relacion->respuesta}}</li></td>
                                     <td>@if($datos->relacion->correcta==1)<p>si</p>@else <p>No</p>@endif</td>
                                    <td><button class="btn btn-warning"><a href="{{route('preguntas.edit', $datos->id)}}"><i class="fas fa-pencil-alt"></a></i></button>
                                             <form action="{{ route('preguntas.delete', $datos->id) }}" class="d-inline" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="sumbit" class="btn btn-danger">
                                                    <i class="fa fa-trash">
                                                    </i>
                                                </button>
                                            </form> 
                                            <button type="submit" class="btn btn-primary"><a href="{{route('registrarPreguntas')}}"><i class="fa-sharp fa-solid fa-plus"></i></a></button>
                                     </td>
                                     @endforeach
                                </tr>
                            </tbody>
                           
                        </table>
                       
                </div>
            </div>
@stop
<!-- Fonts -->
@section('css')

@stop

@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
        $(document).ready(function () {
        $('#example').DataTable();
        }); 
</script>

@stop