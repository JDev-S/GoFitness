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
    
      public function mostrar_videos($pagina=1)
    {
        $numero_videos=DB::select('select count(*)as numero_videos from rutina');
        if($pagina<=0)
        {
            $pagina=1;
        }
        $valor=($pagina*15)-15;
        $categorias=DB::select("select * from categoria");
        
        $noticias=DB::select("select * from noticias");
        
        $videos_rutinas=DB::select("select rutina.id_rutina,rutina.equipamiento,rutina.musculos_trabajar,rutina.id_instructor,categoria.id_categoria,video.nombre_video,video.video_youtube,video.descripcion_video,categoria.nombre_categoria, usuario.nombre from rutina inner join video on video.id_video=rutina.id_rutina inner join categoria on categoria.id_categoria=video.id_categoria inner join instructor on instructor.id_instructor=rutina.id_instructor inner join usuario on usuario.id_usuario=instructor.id_instructor order by rutina.id_rutina LIMIT $valor,15");
        
		return view('/principal/rutinas',compact('videos_rutinas','categorias','noticias','numero_videos','pagina'));
    }
}