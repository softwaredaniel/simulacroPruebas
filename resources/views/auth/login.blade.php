@extends('layouts.app')

@section('content')

@vite(['resources/sass/styles.css'])
<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Bienvenido al Simulador de Pruebas Saber</a>
        </div>
    </nav>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="text-align:center;"><a style="font-size: 25px;"><b>Ingreso de Usuarios</b></a></div>
                        <div class="card-header"  style="text-align:center;"><img src="{{ asset('img/login.png') }}" width="212px"></div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST" id="login">
                                @CSRF
                                <div class="form-group row"  style="text-align:center;">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Numero de documento') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" id="num_documento" class="form-control" name="num_documento" placeholder="Digite su documento" required autofocus>
                                    </div>
                                </div>
                                 @error('Numero de documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </br>
                                <div class="form-group row"  style="text-align:center;">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"><a style="font-size: 20px;">{{ __('Contraseña') }}</a></label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Digite su Contraseña" required>
                                    </div>
                                </div>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Recordarme
                                            </label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ingresar
                                    </button>
                                    <button onclick="limpiarFormulario()" value="Limpiar formulario" class="btn btn-danger">
                                        Limpiar
                                    </button>
                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvido su contraseña?') }}
                                    </a>
                                @endif
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
        
    </main>
        <div class="footer">
            <p style="margin-top: 10px;  margin-bottom: 10px;">Proyecto Programación III - Jose Daniel Solano / Jilberth Gutierrez</p>
        </div>
    </body>
    <!-- Script para limpiar datos formulario de ingreso -->
    <script>
        function limpiarFormulario() {
            document.getElementById("login").reset();
        }
    </script>
    @endsection
    