<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Periodo_suscripcionController extends Controller
{
    public function periodos_suscripcion_mostrar()
	{
		$periodos_suscripcion=DB::select('select * from periodo_suscripcion');
		return view('/Administrador/Periodo_suscripcion/index',compact('periodos_suscripcion'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_periodo'];
		$query=DB::delete("DELETE FROM periodo_suscripcion WHERE id_periodo='$id'");
		return redirect()->action('Periodo_suscripcionController@periodos_suscripcion_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $periodo = $input['periodo'];   
        $query=DB::insert('insert into periodo_suscripcion (id_periodo,periodo) values ( ?, ?)', [null, $periodo]);
        return redirect()->action('Periodo_suscripcionController@periodos_suscripcion_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id_periodo=$input['id_periodo'];
        $periodo = $input['periodo'];
        $query=DB::update("update periodo_suscripcion set periodo='$periodo' where id_periodo=?",[$id_periodo]);
        return redirect()->action('Periodo_suscripcionController@periodos_suscripcion_mostrar')->withInput();
	}
}