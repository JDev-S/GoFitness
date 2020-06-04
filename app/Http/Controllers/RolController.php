<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
class RolController extends Controller
{
      public function roles_mostrar()
	{
		$roles=DB::select('select * from rol');
		return view('/Administrador/Rol/index',compact('roles'));
    }
    
    public function rol_eliminar()
    {
			return view('/Administrador/Rol/delete');
	}

	public function eliminar(Request $input)
    {
		
		$id=$input['id_rol'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM rol WHERE id_rol='$id'");
	
	
		return redirect()->action('RolController@roles_mostrar')->withInput();
	}
    
    
    public function rol_nuevo()
    {
       return view('/Administrador/Rol/insert');
    }
	
	public function insertar(Request $input)
	{
        $descripcion = $input['descripcion'];

           
              $query=DB::insert('insert into rol (id_rol,descripcion) values ( ?, ?)', [null, $descripcion]);
        return redirect()->action('RolController@roles_mostrar')->withInput();
	

       
	}

	public function rol_editar()
    {
			return view('/Administrador/Rol/edit');
    }

	public function actualizar(Request $input)
	{	    
		    $id=$input['id_rol'];
            $descripcion = $input['descripcion'];

                 

                $query=DB::update("update rol set descripcion='$descripcion' where id_rol=?",[$id]);
        return redirect()->action('RolController@roles_mostrar')->withInput();
           

	}
}
