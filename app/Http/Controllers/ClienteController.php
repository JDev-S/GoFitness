<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClienteController extends Controller
{
    public function clientes_mostrar()
	{
		$clientes=DB::select("select concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo,id_cliente,telefono,direccion,ciudad,estado,peso,estatura,fecha_nacimiento,correo,nombre_usuario,contraseña,nombre,apellidos from cliente inner join usuario on cliente.id_cliente=usuario.id_usuario inner join rol on usuario.id_rol=rol.id_rol");
		return view('/Administrador/Cliente/index',compact('clientes'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_cliente'];
		$query=DB::delete("DELETE FROM cliente WHERE id_cliente='$id'");
		return redirect()->action('ClienteController@clientes_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_rol =2;
        $nombre_usuario = $input['nombre_usuario'];
        $apellidos = $input['apellidos'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $correo = $input['correo'];
        $contrasenia = $input['contraseña'];
        $nombre = $input['nombre'];
        
        $telefono = $input['telefono'];
        $direccion = $input['direccion'];
        $ciudad = $input['ciudad'];
        $estado = $input['estado'];
        $peso = $input['peso'];
        $estatura = $input['estatura'];
        
        /*ROLLBACK*/
        
        $query=DB::insert('insert into usuario (id_usuario,id_rol,nombre_usuario,apellidos,fecha_nacimiento,correo,contraseña,nombre) values ( ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre_usuario, $apellidos,$fecha_nacimiento,$correo,$contrasenia,$nombre]);
        
       $id_cliente=DB::select('select id_usuario from usuario order by id_usuario desc limit 1');
        $id=$id_cliente[0]->id_usuario;
        $query2=DB::insert('insert into cliente (id_cliente,telefono,direccion,ciudad,estado,peso,estatura) values ( ?, ?, ?, ?, ?, ?, ?)', [$id, $telefono, $direccion,$ciudad,$estado,$peso,$estatura]);
        
        return redirect()->action('ClienteController@clientes_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        echo $id_usuario=$input['id_cliente'];
        echo $id_rol=2;
        echo $nombre_usuario = $input['nombre_usuario'];
        echo $apellidos = $input['apellidos'];
        echo $fecha_nacimiento = $input['fecha_nacimiento'];
        echo $correo = $input['correo'];
        echo $contrasenia = $input['contraseña'];
        echo $nombre = $input['nombre'];
        
        echo $telefono = $input['telefono'];
        echo $direccion = $input['direccion'];
        echo $ciudad = $input['ciudad'];
        echo $estado = $input['estado'];
        echo $peso = $input['peso'];
        echo $estatura = $input['estatura'];
        
        
        $query=DB::update("update usuario set id_rol='$id_rol', nombre_usuario='$nombre_usuario', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', correo='$correo', contraseña='$contrasenia', nombre='$nombre' where id_usuario=?",[$id_usuario]);
        
         $query2=DB::update("update cliente set telefono='$telefono', direccion='$direccion', ciudad='$ciudad', estado='$estado', peso='$peso', estatura='$estatura' where id_cliente=?",[$id_usuario]);
        return redirect()->action('ClienteController@clientes_mostrar')->withInput();
	}
}