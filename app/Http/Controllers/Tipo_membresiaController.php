<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Tipo_membresiaController extends Controller
{
    public function tipos_membresia_mostrar()
	{
		$tipos_membresia=DB::select('SELECT * FROM tipo_memebresia');
		return view('/Administrador/Tipo_membresia/index',compact('tipos_membresia'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_tipo_membresia'];
		$query=DB::delete("DELETE FROM tipo_memebresia WHERE id_tipo_membresia='$id'");
		return redirect()->action('Tipo_membresiaController@tipos_membresia_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $nombre_membresia = $input['nombre_membresia'];   
        $query=DB::insert('insert into tipo_memebresia (id_tipo_membresia,nombre_membresia) values ( ?, ?)', [null, $nombre_membresia]);
        return redirect()->action('Tipo_membresiaController@tipos_membresia_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id=$input['id_tipo_membresia'];
        $nombre_membresia = $input['nombre_membresia'];
        $query=DB::update("update tipo_memebresia set nombre_membresia='$nombre_membresia' where id_tipo_membresia=?",[$id]);
        return redirect()->action('Tipo_membresiaController@tipos_membresia_mostrar')->withInput();
	}
}