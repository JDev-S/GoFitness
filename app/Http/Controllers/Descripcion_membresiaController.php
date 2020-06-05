<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Descripcion_membresiaController extends Controller
{
    public function descripciones_membresia_mostrar()
	{
		$descripciones_membresia=DB::select('select * from descripcion_membresia inner join tipo_memebresia on tipo_memebresia.id_tipo_membresia=descripcion_membresia.id_tipo_membresia');
		return view('/Administrador/Descripcion_membresia/index',compact('descripciones_membresia'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_descripcion'];
		$query=DB::delete("DELETE FROM descripcion_membresia WHERE id_descripcion='$id'");
		return redirect()->action('Descripcion_membresiaController@descripciones_membresia_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_tipo_membresia = $input['id_tipo_membresia'];
        $descripcion = $input['descripcion'];
        $query=DB::insert('insert into descripcion_membresia (id_descripcion,id_tipo_membresia, descripcion) values ( ?, ?, ?)', [null, $id_tipo_membresia,$descripcion]);
        return redirect()->action('Descripcion_membresiaController@descripciones_membresia_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id=$input['id_descripcion'];
        $id_tipo_membresia = $input['id_tipo_membresia'];
        $descripcion = $input['descripcion'];
        $query=DB::update("update descripcion_membresia set id_tipo_membresia='$id_tipo_membresia', descripcion='$descripcion' where id_descripcion=?",[$id]);
        return redirect()->action('Descripcion_membresiaController@descripciones_membresia_mostrar')->withInput();
	}
}