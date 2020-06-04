<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MembresiaController extends Controller
{
    public function membresias_mostrar()
	{
		$membresias=DB::select('select * from membresias inner join periodo_suscripcion on membresia.id_periodo=permisos_suscripcion.id_periodo inner join tipo_membresia on tipo_membresia.id_tipo_membresia=membresia.id_tipo_membresia');
		return view('/Administrador/Membresia/index',compact('membresias'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_membresia'];
		$query=DB::delete("DELETE FROM membresia WHERE id_membresia='$id'");
		return redirect()->action('MembresiaController@membresias_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_periodo = $input['id_periodo'];
        $id_tipo_membresia = $input['id_tipo_membresia'];
        $precio = $input['precio'];
        
        $$query=DB::insert('insert into membresia (id_membresia,id_periodo,id_tipo_membresia,precio) values ( ?, ?, ?, ?)', [null, $id_periodo, $id_tipo_membresia, $precio]);
        return redirect()->action('MembresiaController@membresias_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id=$input['id_membresia'];
        $id_periodo = $input['id_periodo'];
        $id_tipo_membresia = $input['id_tipo_membresia'];
        $precio = $input['precio'];
        $query=DB::update("update membresia set id_periodo='$id_periodo', id_tipo_membresia='$id_tipo_membresia', precio='$precio' where id_membresia=?",[$id]);
        return redirect()->action('MembresiaController@membresias_mostrar')->withInput();
	}
}