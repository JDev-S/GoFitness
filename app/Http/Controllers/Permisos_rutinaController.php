<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Permisos_rutinaController extends Controller
{
    //tipo de membresia->nombre_membresia
//nombre de la rutina->nombre_video
/*Tabla especial, para explicarle a fernanda*/
    
    public function permisos_rutina_mostrar()
	{
		$permisos_rutina=DB::select('select * from permisos_rutina inner join rutina on rutina.id_rutina=permisos_rutina.id_rutina inner join tipo_memebresia on tipo_memebresia.id_tipo_membresia=permisos_rutina.id_tipo_membresia inner join video on video.id_video=rutina.id_rutina');
		return view('/Administrador/Permisos_rutina/index',compact('permisos_rutina'));
    }

	public function eliminar(Request $input)
    {
		$id_tipo_membresia=$input['id_tipo_membresia'];
        $id_rutina=$input['id_rutina'];
		$query=DB::delete("DELETE FROM permisos_rutina WHERE id_tipo_membresia='$id_tipo_membresia' and id_rutina='$id_rutina'");
		return redirect()->action('Permisos_rutinaController@permisos_rutina_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_tipo_membresia = $input['id_tipo_membresia'];
        $id_rutina = $input['id_rutina'];
        $query=DB::insert('insert into permisos_rutina (id_tipo_membresia,id_rutina) values ( ?, ?)', [$id_tipo_membresia, $id_rutina]);
        return redirect()->action('Permisos_rutinaController@permisos_rutina_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
      echo $id_tipo_membresia=$input['id_tipo_membresia'];
    echo  $id_rutina = $input['id_rutina'];
       echo $id=$input['mem2'];
        
        $query=DB::update("update permisos_rutina set id_tipo_membresia='$id_tipo_membresia' where id_tipo_membresia=? and id_rutina=?",[$id,$id_rutina]);
    // $query=DB::update("update permisos_rutina set id_tipo_membresia='3' where id_tipo_membresia='3' and id_rutina=14");
         
        return redirect()->action('Permisos_rutinaController@permisos_rutina_mostrar')->withInput();
	}
}