<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contenido2', function () {
    return view('contenido2');
});

Route::get('/cronograma', function () {
    return view('cronograma');
});

Route::get('/plan_estudios', function () {
    return view('plan_estudios');
});

Route::get('/objetivos', function () {
    return view('objetivos');
});

Route::get('/justificacion', function () {
    return view('justificacion');
});


Route::get('/capacidades_competencias', function () {
    return view('capacidades_competencias');
});

Route::get('/bibliografia', function () {
    return view('bibliografia');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
});