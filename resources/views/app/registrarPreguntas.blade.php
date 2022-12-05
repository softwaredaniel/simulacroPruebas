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
    <h1>Crear preguntas</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de preguntas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registrarPreguntas') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Facultad') }}</label>

                            <div class="col-md-6">
                                <input id="facultad" type="text" class="form-control @error('name') is-invalid @enderror" name="facultad" value="{{ old('facultad') }}" required autocomplete="facultad" autofocus>

                                @error('facultad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Programa') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="programa" value="{{ old('programa') }}" required autocomplete="name" autofocus>

                                @error('Programa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Asignatura') }}</label>

                            <div class="col-md-6">
                                <input id="asignatura" type="text" class="form-control @error('name') is-invalid @enderror" name="asignatura" value="{{ old('asignatura') }}" required autocomplete="name" autofocus>

                                @error('asignatura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Niveles') }}</label>

                            <div class="col-md-6">
                                <select  class="form-select" name="nivel">
                                    <option value="1">Nivel 1</option>
                                    <option value="2">Nivel 2</option>
                                    <option value="3">Nivel 3</option>
                                    <option value="4">Nivel 4</option>
                                    <option value="5">Nivel 5</option>
                                </select>

                                @error('Niveles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Pregunta') }}</label>

                            <div class="col-md-6">
                                <input id="pregunta" type="text" class="form-control @error('pregunta') is-invalid @enderror" name="pregunta" value="{{ old('pregunta') }}" required >

                                @error('Pregunta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Respuesta') }}</label>

                            <div class="col-md-6">
                                <input id="respuesta" type="text" class="form-control @error('respuesta') is-invalid @enderror" name="respuesta" value="{{ old('respuesta') }}" required >

                                @error('Pregunta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('¿Es correcta la respuesta?') }}</label>

                            <div class="col-md-6">
                                <select  class="form-select" name="correcta">
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>

                                @error('¿Es correcta?')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--Mostrar errores-->
                      @if ($errors->any())
                        <div class="alert alert-danger">
                         <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                         </ul>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
