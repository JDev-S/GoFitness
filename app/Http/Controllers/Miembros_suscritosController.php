<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Miembros_suscritosController extends Controller
{
    public function miembros_suscritos_mostrar()
	{
		$miembros_suscritos=DB::select("SELECT miembros_suscritos.id_cliente,miembros_suscritos.id_membresia,concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo,miembros_suscritos.fecha_pago,usuario.fecha_nacimiento,cliente.peso,cliente.estatura,cliente.telefono,cliente.direccion,cliente.ciudad,cliente.estado,tipo_memebresia.nombre_membresia,tipo_memebresia.id_tipo_membresia FROM miembros_suscritos inner join cliente on cliente.id_cliente=miembros_suscritos.id_cliente inner join membresia on membresia.id_membresia=miembros_suscritos.id_membresia inner join usuario on usuario.id_usuario=cliente.id_cliente inner join tipo_memebresia on membresia.id_tipo_membresia=tipo_memebresia.id_tipo_membresia");
		return view('/Administrador/Miembros_suscritos/index',compact('miembros_suscritos'));
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
         $id=$input['mem2'];
         $fecha_pago = $input['fecha_pago'];
      
        $query=DB::update("update miembros_suscritos set id_membresia='$id_membresia', fecha_pago='$fecha_pago' where id_cliente=? and id_membresia=?", [$id_cliente,$id]);
        return redirect()->action('Miembros_suscritosController@miembros_suscritos_mostrar')->withInput();
	}
}