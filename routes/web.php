<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditorController;
use App\Http\Controllers\EstudianteController;
use APP\Http\Controllers\UsuariosController;
use App\Http\Controllers\PreguntasController;
use App\Htpp\Controllers\PresentarController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Este es el archivo de rutas 
|
*/

//ruta de la raiz del proyecto
Route::get('/', function () {
   return view('welcome');
});

//rutas de autenticacion
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('login',[App\Http\Controllers\Auth\LoginController::class,'authenticate'])->name('login');
//rutas de get y post
Route::get('app/prueba',[App\Http\Controllers\PresentarController::class,'index'])->name('prueba');
Route::get('app/preguntas', [App\Http\Controllers\PreguntasController::class, 'index'])->name('preguntas');
Route::get('app/registrarPreguntas', [App\Http\Controllers\PreguntasController::class, 'verPreguntas']);
Route::get('app/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');
Route::post('app/registrarPreguntas', [App\Http\Controllers\PreguntasController::class, 'store'])->name('registrarPreguntas');
Route::get('app/resultados', [App\Http\Controllers\PreguntasController::class, 'resultados']);
//rutas recursivas de seguridad
Route::resource('app/preguntas',PreguntasController::class);
Route::resource('/estudiante', EstudianteController::class);
Route::resource('/auditor', AuditorController::class);
Route::resource('/usuarios',UsuariosController::class);

//rutas para editar registros
Route::get('/editar/{id}', 'PreguntasController@editar' )->name('preguntas.editar');
//ruta para eliminar usuarios
Route::delete('app/usuarios/{id}',[App\Http\Controllers\UsuariosController::class, 'destroy'])->name('delete');
Route::delete('app/preguntas/{id}',[App\Http\Controllers\PreguntasController::class, 'destroy'])->name('preguntas.delete');
