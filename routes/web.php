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


/*CRUD Rol*/
Route::get('/Admin_rol','RolController@roles_mostrar');

Route::post('/Admin_rol_eliminar','RolController@eliminar');

Route::post('/Admin_rol_nuevo','RolController@insertar');

Route::post('/Admin_rol_editar','RolController@actualizar');

/*CRUD Categoria*/
Route::get('/Admin_categoria','CategoriaController@categorias_mostrar');

Route::post('/Admin_categoria_eliminar','CategoriaController@eliminar');

Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');

Route::post('/Admin_categoria_editar','CategoriaController@actualizar');

/*CRUD Demostrativos*/
Route::get('/Admin_demostrativos','DemostrativosController@demostrativos_mostrar');

Route::post('/Admin_demostrativos_eliminar','DemostrativosController@eliminar');

Route::post('/Admin_demostrativos_nuevo','DemostrativosController@insertar');

Route::post('/Admin_demostrativos_editar','DemostrativosController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');

/*CRUD Rutina*/
Route::get('/Admin_rutina','RutinaController@rutinas_mostrar');

Route::post('/Admin_rutina_eliminar','RutinaController@eliminar');

Route::post('/Admin_rutina_nuevo','RutinaController@insertar');

Route::post('/Admin_rutina_editar','RutinaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');
//-----------------------------------------------------------------------------------------------------------------------

/*CRUD Membresia*/
Route::get('/Admin_membresia','MembresiaController@membresias_mostrar');

Route::post('/Admin_membresia_eliminar','MembresiaController@eliminar');

Route::post('/Admin_membresia_nuevo','MembresiaController@insertar');

Route::post('/Admin_membresia_editar','MembresiaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');

/*CRUD Tipo_membresia*/
Route::get('/Admin_tipo_membresia','Tipo_membresiaController@tipos_membresia_mostrar');

Route::post('/Admin_tipo_membresia_eliminar','Tipo_membresiaController@eliminar');

Route::post('/Admin_tipo_membresia_nuevo','Tipo_membresiaController@insertar');

Route::post('/Admin_tipo_membresia_editar','Tipo_membresiaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');

/*CRUD descripcion_membresia*/
Route::get('/Admin_descripcion_membresia','Descripcion_membresiaController@descripciones_membresia_mostrar');

Route::post('/Admin_descripcion_membresia_eliminar','Descripcion_membresiaController@eliminar');

Route::post('/Admin_descripcion_membresia_nuevo','Descripcion_membresiaController@insertar');

Route::post('/Admin_descripcion_membresia_editar','Descripcion_membresiaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');