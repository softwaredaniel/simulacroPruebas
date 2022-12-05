<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simulacro Pruebas Saber</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--Style-->
        @vite(['resources/sass/styles.css'])

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesion</a>
                        
                        <!--@if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar Usuario</a>
                        @endif
                        -->
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <div style="text-align:center;"><img src="{{ asset('img/logo.png') }}" width="100%"></div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                        <div class="flex justify-center">
                            <img src="{{ asset('img/img1.png') }}" width="30%">
                            </div>
                            <div class="flex justify-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}" class="underline text-gray-900 dark:text-white">¡Diviértete, aprende, prepárate y avanza!</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Plataforma de preparación gratuita para las pruebas Saber.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex justify-center">
                            <img src="{{ asset('img/img2.png') }}" width="30%">
                            </div>
                            <div class="flex justify-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}" class="underline text-gray-900 dark:text-white">Aprendes a tu ritmo</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Identifica los temas que se te dificultan, practica cuando quieras y monitorea tu desempeño a lo largo del tiempo.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex justify-center">
                            <img src="{{ asset('img/img3.png') }}" width="30%">
                            </div>
                            <div class="flex justify-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}" class="underline text-gray-900 dark:text-white">Ganas Confianza</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                La interacción constante con preguntas y material de práctica te dará la confianza y la tranquilidad necesaria para resolver la prueba oficial.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex justify-center">
                                <img src="{{ asset('img/img4.png') }}" width="35%">
                                </div>
                                <div class="flex justify-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}" class="underline text-gray-900 dark:text-white">Dominarás la prueba</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Reunimos preguntas de práctica similares a las de la prueba y material de apoyo que te ayudará a dominar todos los temas.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="footer">
                    <p style="margin-top: 10px;  margin-bottom: 10px;">Proyecto Programación III - Jose Daniel Solano / Jilberth Gutierrez</p>
                </div>
            </div>
        </div>
    </body>
</html>
