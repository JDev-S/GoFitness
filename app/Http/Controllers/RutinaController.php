<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RutinaController extends Controller
{
     public function rutinas_mostrar()
	{
		$rutinas=DB::select('select * from rutina inner join video on rutina.id_rutina=video.id_video inner join categoria on video.id_categoria=categoria.id_categoria inner join instructor on instructor.id_instructor=rutina.id_instructor inner join usuario on usuario.id_usuario=instructor.id_instructor');
		return view('/Administrador/Rutina/index',compact('rutinas'));
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
		$id=$input['id_rutina'];
		$query=DB::delete("DELETE FROM rutina WHERE id_rutina='$id'");
		return redirect()->action('RutinaController@rutinas_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        /*FALTA AGREGAR ROLLBACK*/
        
        /*INSERTAR EN TABLA VIDEO*/
        $id_categoria = $input['id_categoria'];
        $nombre_video = $input['nombre_video'];
        $video_youtube = $input['video_youtube'];
        $descripcion = $input['descripcion'];
        $equipamiento = $input['equipamiento'];
        $musculos_trabajar = $input['musculos_trabajar'];
        $id_instructor = $input['id_instructor'];
        $query=DB::insert('insert into video (id_video,id_categoria,nombre_video,video_youtube,descripcion) values ( ?, ?,?,?,?)', [null, $id_categoria,$nombre_video,$video_youtube,$descripcion]);
        
        
        /*INSERTAR EN TABLA RUTINA*/
        $id_rutina=DB::select('select id_video from video order by id_video desc limit 1');
         $id=$id_rutina[0]->id_video;
        $query=DB::insert('insert into rutina (id_rutina,equipamiento,musculos_trabajar,id_instructor) values ( ?,?,?,?)', [$id,$equipamiento,$musculos_trabajar,$id_instructor]);
        return redirect()->action('RutinaController@rutinas_mostrar')->withInput(); 
	}

	public function actualizar(Request $input)
	{	
       echo $id_rutina=$input['id_video']."\n";   
       echo $id_categoria = $input['id_categoria']."\n"; 
       echo $nombre_video = $input['nombre_video']."\n"; 
        echo $video_youtube = $input['video_youtube']."\n"; 
       echo $descripcion = $input['descripcion']."\n"; 
        
        echo $equipamiento=$input['equipamiento']."\n"; 
       echo $musculos_trabajar=$input['musculos_trabajar']."\n"; 
       echo $id_instructor=$input['id_instructor']."\n"; 
       
        $query=DB::update("update video set id_categoria='$id_categoria', nombre_video='$nombre_video', video_youtube='$video_youtube', descripcion='$descripcion' where id_video=?",[$id_rutina]);
         die();
        $query2=DB::update("update rutina set equipamiento='$equipamiento', musculos_trabajar='$musculos_trabajar', id_instructor='$id_instructor' where id_rutina=?",[$id_rutina]);
        return redirect()->action('RutinaController@rutinas_mostrar')->withInput();
	}
    
        public function mostrar_clase_rutina()
    {
            
        $id_rutina=$_GET['buscar'];
            
        $rutinas=DB::select('select * from video inner join rutina on rutina.id_rutina=video.id_video inner join instructor on instructor.id_instructor=rutina.id_instructor inner join ejercicios_rutina on ejercicios_rutina.id_rutina=rutina.id_rutina inner join categoria on categoria.id_categoria=video.id_categoria inner join usuario on usuario.id_usuario=instructor.id_instructor where rutina.id_rutina='.$id_rutina);
        $num=DB::select('select count(*)as numero from ejercicios_rutina where id_rutina='.$id_rutina);  
		return view('/principal/clases',compact('rutinas','num'));
        
    }
}