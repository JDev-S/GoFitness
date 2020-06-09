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

Route::get('/clases','RutinaController@mostrar_clase_rutina');

Route::get('/contacto', function () {
    return view('/principal/contacto');
});

Route::get('/iniciar_sesion', function () {
    return view('/principal/login');
});


Route::get('/plan_fitness','Tipo_membresiaController@tipos_membresia_mostrar_publico');


Route::get('/videos_rutinas/{pagina?}','Ejercicios_rutinaController@mostrar_videos');

Route::get('/videos_demostrativos/{pagina?}','DemostrativosController@mostrar_videos');

Route::get('/registrarse', function () {
    return view('/principal/registrarse');
});

Route::get('/registrarse','LoginController@registrar');
/*Registro del cliente en la pagina web*/

Route::post('/registro', 'LoginController@registrarse')->name('registro');

/*Ruta para loguearse*/
Route::post('/logueo', 'LoginController@Login')->name('logueo');

/*Cerrar sesion*/
Route::get('/cerrar_sesion','LoginController@Logout');

//---------------------------------------CRUD ADMINISTRADOR-----------------------------------------
/*CRUD Rol*/
Route::get('/Admin_rol','RolController@roles_mostrar');

Route::post('/Admin_rol_eliminar','RolController@eliminar');

Route::post('/Admin_rol_nuevo','RolController@insertar');

Route::post('/Admin_rol_editar','RolController@actualizar');

/*CRUD Categoria*/
Route::get('/Admin_categoria','CategoriaController@categorias_mostrar')->middleware('admin:1')->name('Admin_categoria');

Route::post('/Admin_categoria_eliminar','CategoriaController@eliminar');

Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');

Route::post('/Admin_categoria_editar','CategoriaController@actualizar');

/*CRUD Demostrativos*/
Route::get('/Admin_demostrativos','DemostrativosController@demostrativos_mostrar')->middleware('admin:1')->name('Admin_demostrativos');

Route::post('/Admin_demostrativos_eliminar','DemostrativosController@eliminar');

Route::post('/Admin_demostrativos_nuevo','DemostrativosController@insertar');

Route::post('/Admin_demostrativos_editar','DemostrativosController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');

/*CRUD Rutina*/
Route::get('/Admin_rutina','RutinaController@rutinas_mostrar')->middleware('admin:1')->name('Admin_rutina');

Route::post('/Admin_rutina_eliminar','RutinaController@eliminar');

Route::post('/Admin_rutina_nuevo','RutinaController@insertar');

Route::post('/Admin_rutina_editar','RutinaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');
//-----------------------------------------------------------------------------------------------------------------------

/*CRUD Membresia*/
Route::get('/Admin_membresia','MembresiaController@membresias_mostrar')->middleware('admin:1')->name('Admin_membresia');

Route::post('/Admin_membresia_eliminar','MembresiaController@eliminar');

Route::post('/Admin_membresia_nuevo','MembresiaController@insertar');

Route::post('/Admin_membresia_editar','MembresiaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');

/*CRUD Tipo_membresia*/
Route::get('/Admin_tipo_membresia','Tipo_membresiaController@tipos_membresia_mostrar')->middleware('admin:1')->name('Admin_tipo_membresia');

Route::post('/Admin_tipo_membresia_eliminar','Tipo_membresiaController@eliminar');

Route::post('/Admin_tipo_membresia_nuevo','Tipo_membresiaController@insertar');

Route::post('/Admin_tipo_membresia_editar','Tipo_membresiaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');

/*CRUD descripcion_membresia*/
Route::get('/Admin_descripcion_membresia','Descripcion_membresiaController@descripciones_membresia_mostrar')->middleware('admin:1')->name('Admin_descripcion_membresia');

Route::post('/Admin_descripcion_membresia_eliminar','Descripcion_membresiaController@eliminar');

Route::post('/Admin_descripcion_membresia_nuevo','Descripcion_membresiaController@insertar');

Route::post('/Admin_descripcion_membresia_editar','Descripcion_membresiaController@actualizar');

Route::get('/video_buscar','VideoController@busqueda')->name('demostrativos_buscar');

/*CRUD Ejercicios rutina*/
Route::get('/Admin_ejercicios_rutina','Ejercicios_rutinaController@ejercicios_rutina_mostrar')->middleware('admin:1')->name('Admin_ejercicios_rutina');

Route::post('/Admin_ejercicios_rutina_eliminar','Ejercicios_rutinaController@eliminar');

Route::post('/Admin_ejercicios_rutina_nuevo','Ejercicios_rutinaController@insertar');

Route::post('/Admin_ejercicios_rutina_editar','Ejercicios_rutinaController@actualizar');

/*CRUD Permisos rutina*/
Route::get('/Admin_permisos_rutina','Permisos_rutinaController@permisos_rutina_mostrar')->middleware('admin:1')->name('Admin_permisos_rutina');

Route::post('/Admin_permisos_rutina_eliminar','Permisos_rutinaController@eliminar');

Route::post('/Admin_permisos_rutina_nuevo','Permisos_rutinaController@insertar');

Route::post('/Admin_permisos_rutina_editar','Permisos_rutinaController@actualizar');

/*CRUD Usuario*/
Route::get('/Admin_usuario','UsuarioController@usuarios_mostrar')->middleware('admin:1')->name('Admin_usuario');

Route::post('/Admin_usuario_eliminar','UsuarioController@eliminar');

Route::post('/Admin_usuario_nuevo','UsuarioController@insertar');

Route::post('/Admin_usuario_editar','UsuarioController@actualizar');

/*CRUD Noticias*/
Route::get('/Admin_noticias','NoticiasController@noticias_mostrar')->middleware('admin:1')->name('Admin_noticias');

Route::post('/Admin_noticias_eliminar','NoticiasController@eliminar');

Route::post('/Admin_noticias_nuevo','NoticiasController@insertar');

Route::post('/Admin_noticias_editar','NoticiasController@actualizar');

/*CRUD periodo_suscripcion*/
Route::get('/Admin_periodo_suscripcion','Periodo_suscripcionController@periodos_suscripcion_mostrar')->middleware('admin:1')->name('Admin_periodo_suscripcion');

Route::post('/Admin_periodo_suscripcion_eliminar','Periodo_suscripcionController@eliminar');

Route::post('/Admin_periodo_suscripcion_nuevo','Periodo_suscripcionController@insertar');

Route::post('/Admin_periodo_suscripcion_editar','Periodo_suscripcionController@actualizar');

/*CRUD miembros_suscritos*/
Route::get('/Admin_miembros_suscritos','Miembros_suscritosController@miembros_suscritos_mostrar')->middleware('admin:1')->name('Admin_miembros_suscritos');

Route::post('/Admin_miembros_suscritos_eliminar','Miembros_suscritosController@eliminar');

Route::post('/Admin_miembros_suscritos_nuevo','Miembros_suscritosController@insertar');

Route::post('/Admin_miembros_suscritos_editar','Miembros_suscritosController@actualizar');

/*CRUD cliente*/
Route::get('/Admin_clientes','ClienteController@clientes_mostrar')->middleware('admin:1')->name('Admin_clientes');

Route::post('/Admin_clientes_eliminar','ClienteController@eliminar');

Route::post('/Admin_clientes_nuevo','ClienteController@insertar');

Route::post('/Admin_clientes_editar','ClienteController@actualizar');

/*CRUD Instructor*/
Route::get('/Admin_instructor','InstructorController@instructores_mostrar')->middleware('admin:1')->name('Admin_instructor');

Route::post('/Admin_instructor_eliminar','InstructorController@eliminar');

Route::post('/Admin_instructor_nuevo','InstructorController@insertar');

Route::post('/Admin_instructor_editar','InstructorController@actualizar');