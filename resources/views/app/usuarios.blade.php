<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

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
    <h1>Administración de Usarios</h1>
@stop

<!-- Contenido principal del ingreso -->
@section('content')
            <div class="card card-outline card-primary">
                <div class="card-body">
                        <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>No. Documento</th>
                                    <th>Email</th>
                                    <th>Tipo documento</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->nombre}}</td>
                                        <td>{{$user->apellido}}</td>
                                        <td>{{$user->num_documento}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->tipo_doc}}</td>
                                        
                                        <!-- Se analiza el id rol para indicar el nombre y no el id -->
                                        @if ($user->id_rol == 1)
                                                <td>Admin</td>
                                            @elseif ($user->id_rol == 2)
                                                <td>Estudiante</td>
                                            @else 
                                                <td>Auditor</td>
                                        @endif
                                        
                                        <td>
                                        <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                        <form action="{{ route('delete', $user->id) }}" class="d-inline" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="sumbit" class="btn btn-danger">
                                                <i class="fa fa-trash">
                                                </i>
                                            </button>
                                        </form> 
                                           
                                            <button type="submit" id="eliminar-registro" class="btn btn-primary"><a href="{{route('register')}}"><i class="fas fa-user-plus"></i></a></button>
                                       
                                        </td>                           
                                      
                                    </tr>
                                @endforeach
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
            $('#usuarios').DataTable({
                responsive: true,
                autoWith: false,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encuentran registros",
                    "info": "Página _PAGE_ of _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search": "Buscar",
                    'paginate': {
                        'next': "Siguiente",
                        'previous': "Anterior",
                    }
                }
            });
        }); 
</script>
<script>
        $('.eliminar-registro').submit(function(e){
        e.preventDefault();
        
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Eliminada!',
            'Your file has been deleted.',
            'success'
            )
        }
        })
    });     
</script>
@stop