<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class InstructorController extends Controller
{
     public function instructores_mostrar()
	{
		$instructores=DB::select("select concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo,nombre,apellidos,fecha_nacimiento,foto,estudios,experiencia,nombre_usuario,correo,contraseña,id_instructor from instructor inner join usuario on instructor.id_instructor=usuario.id_usuario");
		return view('/Administrador/Instructor/index',compact('instructores'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_instructor'];
		$query=DB::delete("DELETE FROM instructor WHERE id_instructor='$id'");
		return redirect()->action('InstructorController@instructores_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_rol = 3;
        $nombre_usuario = $input['nombre_usuario'];
        $apellidos = $input['apellidos'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $correo = $input['correo'];
        $contrasenia = $input['contraseña'];
        $encryptedPassword = bcrypt($contrasenia);
        $nombre = $input['nombre'];
        
        $estudios = $input['estudios'];
        $experiencia = $input['experiencia'];

        
        if($input->hasFile('foto'))
         {
             $file=$input->file('foto');
             $name=time().$nombre.'_'.$apellidos;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
        
        /*ROLLBACK*/
        
        $query=DB::insert('insert into usuario (id_usuario,id_rol,nombre_usuario,apellidos,fecha_nacimiento,correo,contraseña,nombre) values ( ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre_usuario, $apellidos,$fecha_nacimiento,$correo,$encryptedPassword,$nombre]);
        
       $id_instructor=DB::select('select id_usuario from usuario order by id_usuario desc limit 1');
        
            $id=$id_instructor[0]->id_usuario;
        $query2=DB::insert('insert into instructor (id_instructor,estudios,experiencia,foto) values ( ?, ?, ?, ?)', [$id, $estudios, $experiencia,$foto]);
        
        return redirect()->action('InstructorController@instructores_mostrar')->withInput();
        }
	}

	public function actualizar(Request $input)
	{	    
        $id_instructor=$input['id_instructor'];
        $id_rol=3;
        $nombre_usuario = $input['nombre_usuario'];
        $apellidos = $input['apellidos'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $correo = $input['correo'];
        $contrasenia = $input['contraseña'];
        $nombre = $input['nombre'];
        
        $estudios = $input['estudios'];
        $experiencia = $input['experiencia'];
            
         $query5=DB::select("SELECT usuario.contraseña FROM usuario WHERE correo='$email'");
        if($query5[0]->contraseña==$password)
		{
        if($input->hasFile('foto'))
            {
                 $file=$input->file('foto');
                 $name=time().$nombre.'_'.$apellidos;
                 $file->move(public_path().'/images/',$name);
                 $foto="/images/".$name;

                $query=DB::update("update usuario set id_rol='$id_rol', nombre_usuario='$nombre_usuario', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', correo='$correo', nombre='$nombre' where id_usuario=?",[$id_instructor]);
        
         $query2=DB::update("update instructor set estudios='$estudios', experiencia='$experiencia', foto='$foto' where id_instructor=?",[$id_instructor]);
        return redirect()->action('InstructorController@instructores_mostrar')->withInput();
            }
            else
            {
                $query=DB::update("update usuario set id_rol='$id_rol', nombre_usuario='$nombre_usuario', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', correo='$correo', contraseña='$contrasenia', nombre='$nombre' where id_usuario=?",[$id_instructor]);
        
         $query2=DB::update("update instructor set estudios='$estudios', experiencia='$experiencia' where id_instructor=?",[$id_instructor]);
        return redirect()->action('InstructorController@instructores_mostrar')->withInput();
               
            }
        
        }
        
        else
        {
            $encryptedPassword = bcrypt($contrasenia);
            if($input->hasFile('foto'))
            {
                 $file=$input->file('foto');
                 $name=time().$nombre.'_'.$apellidos;
                 $file->move(public_path().'/images/',$name);
                 $foto="/images/".$name;

                $query=DB::update("update usuario set id_rol='$id_rol', nombre_usuario='$nombre_usuario', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', correo='$correo', contraseña='$contrasenia', nombre='$nombre' where id_usuario=?",[$id_instructor]);
        
         $query2=DB::update("update instructor set estudios='$estudios', experiencia='$experiencia', foto='$foto' where id_instructor=?",[$id_instructor]);
        return redirect()->action('InstructorController@instructores_mostrar')->withInput();
            }
            else
            {
                $query=DB::update("update usuario set id_rol='$id_rol', nombre_usuario='$nombre_usuario', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', correo='$correo', contraseña='$encryptedPassword', nombre='$nombre' where id_usuario=?",[$id_instructor]);
        
         $query2=DB::update("update instructor set estudios='$estudios', experiencia='$experiencia' where id_instructor=?",[$id_instructor]);
        return redirect()->action('InstructorController@instructores_mostrar')->withInput();
               
            }
        }
        
        
	}
}