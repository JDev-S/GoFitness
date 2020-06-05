<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NoticiasController extends Controller
{
    public function noticias_mostrar()
	{
		$noticias=DB::select('select * from noticias');
		return view('/Administrador/Noticias/index',compact('noticias'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_noticia'];
		$query=DB::delete("DELETE FROM noticias WHERE id_noticia='$id'");
		return redirect()->action('NoticiasController@noticias_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $nombre_noticia = $input['nombre_noticia'];
        $descripcion = $input['descripcion'];
        if($input->hasFile('imagen'))
         {
             $file=$input->file('imagen');
             $name=time().$nombre_noticia;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
        $query=DB::insert('insert into noticias (id_noticia,nombre_noticia,descripcion,imagen) values ( ?, ?, ?, ?)', [null, $nombre_noticia, $descripcion, $foto]);
        return redirect()->action('NoticiasController@noticias_mostrar')->withInput();
        }
	}

	public function actualizar(Request $input)
	{	    
       /* $id=$input['id_noticia'];
        $nombre_noticia = $input['nombre_noticia'];
        $nombre_descripcion = $input['descripcion'];
        $nombre_imagen = $input['imagen'];
        $query=DB::update("update noticias set nombre_noticia='$nombre_noticia' where id_noticia=?",[$id]);
        return redirect()->action('NoticiasController@noticias_mostrar')->withInput();*/
        
        
        $id=$input['id_noticia'];
            $nombre_noticia = $input['nombre_noticia'];
            $descripcion = $input['descripcion'];
            
            if($input->hasFile('imagen'))
            {
                 $file=$input->file('imagen');
                 $name=time().$nombre_noticia;
                 $file->move(public_path().'/images/',$name);
                 $foto="/images/".$name;

                $query=DB::update("update noticias set nombre_noticia='$nombre_noticia',descripcion='$descripcion',imagen='$foto' where id_noticia=?",[$id]);
                return redirect()->action('NoticiasController@noticias_mostrar')->withInput();
            }
            else
            {
                $query=DB::update("update noticias set nombre_noticia='$nombre_noticia',descripcion='$descripcion' where id_noticia=?",[$id]);
                return redirect()->action('NoticiasController@noticias_mostrar')->withInput();
            }

	}
}