<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller
{
    public function usuarios_mostrar()
	{
		$usuario=DB::select('select * from usuario inner join rol on rol.id_rol=usuario.id_rol');
		return view('/Administrador/Usuario/index',compact('usuarios'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_usuario'];
		$query=DB::delete("DELETE FROM usuario WHERE id_usuario='$id'");
		return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_rol = $input['id_rol'];
        $nombre_usuario = $input['nombre_usuario'];
        $apellidos = $input['apellidos'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $correo = $input['corre'];
        $contrasenia = $input['contrasenia'];
        $nombre = $input['nombre'];
        
        $query=DB::insert('insert into usuario (id_usuario,id_rol,nombre_usuario,apellidos,fecha_nacimiento,correo,contraseña,nombre) values ( ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombree_usuario, $apelllidos,$fecha_nacimiento,$coorreo,$conntrasenia,$nombre]);
        return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id_usuario=$input['id_usuario'];
        $id_rol=$input['id_rol'];
        $nombre_usuario = $input['nombre_usuario'];
        $apellidos = $input['apellidos'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $correo = $input['correo'];
        $contrasenia = $input['contraseña'];
        $nombre = $input['nombre'];
        $query=DB::update("update usuario set id_rol='$id_rol', nombre_usuario='$nombre_usuario', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', correo='$correo', contraseña='$contrasenia', nombre='$nommbre' where id_usuario=?",[$id_ussuario]);
        return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}
}