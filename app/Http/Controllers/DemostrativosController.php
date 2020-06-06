<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DemostrativosController extends Controller
{
    public function mostrar_videos($pagina=1)
    {
        $numero_videos=DB::select('select count(*)as numero_videos from demostrativos');
        if($pagina<=0)
        {
            $pagina=1;
        }
        $valor=($pagina*15)-15;
        $categorias=DB::select("select * from categoria");
        
        $noticias=DB::select("select * from noticias");
        
        $videos_demostrativos=DB::select("select demostrativos.id_demostrativo,video.id_video,categoria.id_categoria,video.nombre_video,video.video_youtube,video.descripcion,categoria.nombre_categoria from demostrativos inner join video on video.id_video=demostrativos.id_demostrativo inner join categoria on categoria.id_categoria=video.id_categoria order by demostrativos.id_demostrativo LIMIT $valor,15");
        
		return view('/principal/videos_demostrativos',compact('videos_demostrativos','categorias','noticias','numero_videos','pagina'));
    }
    
    
    public function demostrativos_mostrar()
	{
		$demostrativos=DB::select('select * from demostrativos inner join video on demostrativos.id_demostrativo=video.id_video inner join categoria on categoria.id_categoria=video.id_categoria');
		return view('/Administrador/Demostrativos/index',compact('demostrativos'));
    }
    
    
    /*PENDIENTE*/
    public function video_buscar()
	{
        $buscar=$_GET['buscar'];
		$roles=DB::select("select * from video where nombre_video like '$buscar'");
		return view('/Administrador/Video/index',compact('videos'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_demostrativo'];
		$query=DB::delete("DELETE FROM demostrativos WHERE id_demostrativo='$id'");
		return redirect()->action('DemostrativosController@demostrativos_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        /*FALTA AGREGAR ROLLBACK*/
        
        /*INSERTAR EN TABLA VIDEO*/
        $id_categoria = $input['id_categoria'];
        $nombre_video = $input['nombre_video'];
        $video_youtube = $input['video_youtube'];
        $descripcion = $input['descripcion'];

        $query=DB::insert('insert into video (id_video,id_categoria,nombre_video,video_youtube,descripcion) values ( ?, ?,?,?,?)', [null, $id_categoria,$nombre_video,$video_youtube,$descripcion]);
        
        
        /*INSERTAR EN TABLA DEMOSTRATIVOS*/
        $id_demostrativo=DB::select('select id_video from video order by id_video desc limit 1');
        //print_r($id_demostrativo);
        $id=$id_demostrativo[0]->id_video;

        $query=DB::insert('insert into demostrativos (id_demostrativo) values ( ?)', [$id]);
        return redirect()->action('DemostrativosController@demostrativos_mostrar')->withInput(); 
	}

	public function actualizar(Request $input)
	{	
        $id_demostrativo=$input['id_video'];    
        $id_categoria = $input['id_categoria'];
        $nombre_video = $input['nombre_video'];
        $video_youtube = $input['video_youtube'];
        $descripcion = $input['descripcion'];
        
        $query=DB::update("update video set id_categoria='$id_categoria', nombre_video='$nombre_video', video_youtube='$video_youtube', descripcion='$descripcion' where id_video=?",[$id_demostrativo]);
        return redirect()->action('DemostrativosController@demostrativos_mostrar')->withInput();
	}
}