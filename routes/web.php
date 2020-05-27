<?php

use Illuminate\Support\Facades\Route;

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
    return view('/principal/index');
});

Route::get('/acerca_de', function () {
    return view('/principal/acerca');
});

Route::get('/clases', function () {
    return view('/principal/clases');
});

Route::get('/contacto', function () {
    return view('/principal/contacto');
});

Route::get('/iniciar_sesion', function () {
    return view('/principal/login');
});

Route::get('/plan_fitness', function () {
    return view('/principal/plan_fitness');
});

Route::get('/videos_demostrativos', function () {
    return view('/principal/videos_demostrativos');
});

Route::get('/registrarse', function () {
    return view('/principal/registrarse');
});