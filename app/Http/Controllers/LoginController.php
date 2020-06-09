<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use DB;
class LoginController extends Controller
{
    public function registrar()
    {
        $message='';
        return view('/principal/registrarse',compact('message'));
    }
    
    
    
    
    public function registrarse(Request $input)
	{
        $id_rol =2;
        $nombre_usuario = $input['nombre_usuario'];
        $apellidos = $input['apellidos'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $correo = $input['correo'];
        $contrasenia = $input['contraseña'];
        $encryptedPassword = bcrypt($contrasenia);
        $nombre = $input['nombre'];
        
        $telefono = $input['telefono'];
        $direccion = $input['direccion'];
        $ciudad = $input['ciudad'];
        $estado = $input['estado'];
        $peso = $input['peso'];
        $estatura = $input['estatura'];
        
        /*ROLLBACK*/
        $usuarios=DB::select("SELECT * FROM usuario where usuario.nombre_usuario='$nombre_usuario' ");
		if (empty($usuarios))
		{
            $query=DB::insert('insert into usuario (id_usuario,id_rol,nombre_usuario,apellidos,fecha_nacimiento,correo,contraseña,nombre) values ( ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre_usuario, $apellidos,$fecha_nacimiento,$correo,$encryptedPassword,$nombre]);

           $id_cliente=DB::select('select id_usuario from usuario order by id_usuario desc limit 1');
            $id=$id_cliente[0]->id_usuario;
            $query2=DB::insert('insert into cliente (id_cliente,telefono,direccion,ciudad,estado,peso,estatura) values ( ?, ?, ?, ?, ?, ?, ?)', [$id, $telefono, $direccion,$ciudad,$estado,$peso,$estatura]);

            return redirect('/iniciar_sesion');
        }
        else{
			$message="Ese nombre de usuario ya esta registrado, porfavor utilize otro";
			return view('/principal/registrarse',compact('message'));
		}
	}
    
    
    public function Login(Request $input)

	{
    $nombre_usuario = $input['nombre_usuario'];
    $contrasenia = $input['contraseña'];
   
    
    $query = "select * from usuario where nombre_usuario='$nombre_usuario'";
        $data=DB::select($query);
        $cantidad= sizeof($data);

        if($cantidad>0)
        {
            $query2 = "select usuario.contraseña,usuario.nombre_usuario from usuario where nombre_usuario='$nombre_usuario'";
            $data2=DB::select($query2);

            
            if (Hash::check($contrasenia, $data2[0]->contraseña)) {

           //echo 'essta registrado';
            Session::put('nombre_usuario',$nombre_usuario);
            Session::put('contraseña',$contrasenia);
            $correo=Session::get('nombre_usuario');
            $pass=Session::get('contraseña');
            
           return redirect('/Admin_clientes');
                
            }else{
                return redirect('/iniciar_sesion');
            }   

        }
        else{
            return redirect('/iniciar_sesion');
        }

    
    }
    
    public function Logout()
	{
		
		Session::flush();
		return redirect('/iniciar_sesion');
	}
    
}
