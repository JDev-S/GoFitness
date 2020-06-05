<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Miembros_suscritosController extends Controller
{
    public function miembros_suscritos_mostrar()
	{
		$miembros_suscritos=DB::select('select * from miembros_suscritos');
		return view('/Administrador/Miembros_suscritos/index',compact('miembreos_suscritos'));
    }

	public function eliminar(Request $input)
    {
		$id_cliente=$input['id_cliente'];
        $id_membresia=$input['id_membresia'];
		$query=DB::delete("DELETE FROM miembros_suscritos WHERE id_cliente='$id_cliente' and id_membresia='$id_membresia'");
		return redirect()->action('Miembros_suscritosController@miembros_suscritos_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_cliente = $input['id_cliente'];
        $id_membresia = $input['id_membresia'];
        $fecha_pago = $input['fecha_pago'];
        $query=DB::insert('insert into miembros_suscritos (id_cliente,id_membresia,fecha_pago) values ( ?, ?, ?)', [$id_cliente, $id_membresia, $fecha_pago]);
        return redirect()->action('Miembros_suscritosController@miembros_suscritos_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id_cliente=$input['id_cliente'];
        $id_membresia=$input['id_membresia'];
        $fecha_pago = $input['fecha_pago'];
        $query=DB::update("update miembros_suscritos set id_membresia='$id_membresia', fecha_pago='$fecha_pago' where id_cliente=? and id_membresia=?", [$id_cliente,$id_membresia]);
        return redirect()->action('miembros_suscritosController@miembros_suscritos_mostrar')->withInput();
	}
}