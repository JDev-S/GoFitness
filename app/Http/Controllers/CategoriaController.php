<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriaController extends Controller
{
    public function categorias_mostrar()
	{
		$categorias=DB::select('select * from categoria');
		return view('/Administrador/Categoria/index',compact('categorias'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_categoria'];
		$query=DB::delete("DELETE FROM categoria WHERE id_categoria='$id'");
		return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $nombre_categoria = $input['nombre_categoria'];   
        $query=DB::insert('insert into categoria (id_categoria,nombre_categoria) values ( ?, ?)', [null, $nombre_categoria]);
        return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id=$input['id_categoria'];
        $nombre_categoria = $input['nombre_categoria'];
        $query=DB::update("update categoria set nombre_categoria='$nombre_categoria' where id_categoria=?",[$id]);
        return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}
}