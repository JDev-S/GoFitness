<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class Ejercicios_rutinaController extends Controller
{
    public function ejercicios_rutina_mostrar()
	{
		$ejercicios_rutina=DB::select('select * from ejercicios_rutina inner join rutina on rutina.id_rutina=ejercicios_rutina.id_rutina');
		return view('/Administrador/Ejercicios_rutina/index',compact('ejercicios_rutina'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_ejercicio'];
		$query=DB::delete("DELETE FROM ejercicios_rutina WHERE id_ejercicios='$id'");
		return redirect()->action('Ejercicios_rutinaController@ejercicios_rutina_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_rutina = $input['id_rutina'];
        $nombre_ejercicio = $input['nombre_ejercicio'];
        $descripcion = $input['descripcion'];
        $query=DB::insert('insert into ejercicios_rutina (id_ejercicio,id_rutina,nombre_ejercicio,descripcion) values ( ?, ?, ?, ?)', [null, $id_rutina,$nombre_ejercicio,$descripcion]);
        return redirect()->action('Ejercicios_rutinaController@ejercicios_rutina_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id=$input['id_ejercicio'];
        $id_rutina = $input['id_rutina'];
        $nombre_ejercicio = $input['nombre_ejercicio'];
        $descripcion = $input['descripcion'];
        $query=DB::update("update ejercicios_rutina set id_rutina='$id_rutina', nombre_ejercicio='$nombre_ejercicio', descripcion='$descripcion' where id_ejercicio=?",[$id]);
        return redirect()->action('Ejercicios_rutinaController@ejercicios_rutina_mostrar')->withInput();
	}
}