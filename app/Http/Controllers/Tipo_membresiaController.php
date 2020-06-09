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
    
    
    public function tipos_membresia_mostrar_publico()
	{
        $aTipo_membresia = array();
        $oTipo_membresia = new \stdClass();
        
        $aDescripcion = array();
        $oDescripcion = new \stdClass();
        
        $aPeriodo_membresia = array();
        $oPeriodo_membresia = new \stdClass();
        
		$tipos_membresia=DB::select('SELECT * FROM tipo_memebresia');
        
        foreach($tipos_membresia as $tipo_membresia)
        {
            $oTipo_membresia->id_tipo_membresia=$tipo_membresia->id_tipo_membresia;
            $oTipo_membresia->nombre_membresia=$tipo_membresia->nombre_membresia;
            
            $descripciones_membresia=DB::select('SELECT * FROM descripcion_membresia where id_tipo_membresia='.$tipo_membresia->id_tipo_membresia);
            
            $aDescripcion = array();
            if(count($descripciones_membresia)<=0)
            {   
                $oDescripcion->id_descripcion='';
                $oDescripcion->id_tipo_membresia='';
                $oDescripcion->descripcion='';
                array_push($aDescripcion,$oDescripcion);
                $oDescripcion = new \stdClass();
            }
            else
            {   
                foreach($descripciones_membresia as $descripcion_membresia)
                {   
                    $oDescripcion->id_descripcion=$descripcion_membresia->id_descripcion;
                    $oDescripcion->id_tipo_membresia=$descripcion_membresia->id_tipo_membresia;
                    $oDescripcion->descripcion=$descripcion_membresia->descripcion;       
                    array_push($aDescripcion,$oDescripcion);
                    $oDescripcion = new \stdClass();
                }
            }
            
            $periodos_membresia=DB::select('SELECT * FROM membresia inner join periodo_suscripcion on periodo_suscripcion.id_periodo=membresia.id_periodo where id_tipo_membresia='.$tipo_membresia->id_tipo_membresia);
            
            $aPeriodo_membresia = array();
            if(count($periodos_membresia)<=0)
            {   
                $oPeriodo_membresia->id_membresia='';
                $oPeriodo_membresia->id_periodo='';
                $oPeriodo_membresia->id_tipo_membresia='';
                $oPeriodo_membresia->precio='';
                array_push($aDescripcion,$oDescripcion);
                $oDescripcion = new \stdClass();
            }
            else
            {   
                foreach($periodos_membresia as $periodo_membresia)
                {   
                    $oPeriodo_membresia->id_membresia=$periodo_membresia->id_membresia;
                    $oPeriodo_membresia->periodo=$periodo_membresia->periodo;
                    //$oPeriodo_membresia->id_tipo_membresia=$periodo_membresia->id_tipo_membresia; 
                    $oPeriodo_membresia->precio=$periodo_membresia->precio; 
                    array_push($aPeriodo_membresia,$oPeriodo_membresia);
                    $oPeriodo_membresia = new \stdClass();
                }
            }
            $oTipo_membresia->descripcion=$aDescripcion;
            $oTipo_membresia->periodo_membresia=$aPeriodo_membresia;
            array_push($aTipo_membresia,$oTipo_membresia);
            $oTipo_membresia = new \stdClass();
        }
           // print_r($aTipo_membresia);
            
        
        $descripcion_membresia=DB::select('SELECT * FROM descripcion_membresia');
        $membresia=DB::select('SELECT * FROM membresia');

		return view('/principal/plan_fitness',compact('aTipo_membresia'));
    }
}