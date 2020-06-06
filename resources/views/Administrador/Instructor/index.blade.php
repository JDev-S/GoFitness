@extends('welcome2')
@section('contenido')

<div class="container justify-content-center align-items-center">
  <br>
    <h2 style="text-align:center;">Administración de clientes</h2>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>

  <div class="table-responsive" style=" border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;">
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="margin: 0 auto;">
          <thead>
          <tr>
              <th>Foto</th>
          <th>Nombre completo</th>
          <th>Fecha de nacimiento</th>
              <th>Estudios</th>             
              <th>Experiencia</th>
              <th>Nombre de usuario</th>
              <th>Correo</th>
              <th>Password</th>
              <th>Acciones</th>
            
          </tr>
          </thead>
          <tbody>
          @foreach($instructores as $instructor)
              <tr>
              <td><img src='{{ $instructor->foto}}' alt="img_instructor" height="200px" width="200px"></td>
              <td>{{ $instructor->nombre_completo}}</td>
              <td>{{ $instructor->fecha_nacimiento}}</td>
              <td>{{ $instructor->estudios}}</td>
              <td>{{ $instructor->experiencia}}</td>
              <td>{{ $instructor->nombre_usuario}}</td>
              <td>{{ $instructor->correo}}</td>
              <td>{{ $instructor->contraseña}}</td>
                  
                  <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $instructor->id_instructor;?>" data-nombre="<?php echo $instructor->nombre_completo;?>">Eliminar</button>
                            
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="<?php echo $instructor->id_instructor;?>"   data-estudios="<?php echo $instructor->estudios;?>" data-experiencia="<?php echo $instructor->experiencia;?>" data-foto="<?php echo $instructor->foto;?>"  data-fecha_nacimiento="<?php echo $instructor->fecha_nacimiento;?>" data-nombre="<?php echo $instructor->nombre;?>"  data-apellidos="<?php echo $instructor->apellidos;?>" data-usu="<?php echo $instructor->nombre_usuario;?>" data-password="<?php echo $instructor->contraseña;?>" data-correo="<?php echo $instructor->correo;?>">Editar</button>
                  </td>
                 

              </tr>
          @endforeach
          </tbody>
      </table>
      </div>
</div>



<!--model eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="deleteModalLabel">Eliminar Registro</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
     {{ Form::open(array('action' => 'InstructorController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_instructor') }}
         
       {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
       <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       </div>
       {{ Form::close() }}
     </div>
   </div>
 </div>
</div>


<!-- model insertar-->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog"  aria-labelledby="insertModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="insertModalLabel">Insertar Nuevo Registro</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
     

     {{ Form::open(array('action' => 'InstructorController@insertar', 'method' => 'post','id'=>'descripcion_especificacion','name'=>'descripcion_especificacion','enctype'=>'multipart/form-data')) }}
 
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Nombre(s):</label>
           {{ Form::text('nombre', '', array('id' => 'nombre',  'placeholder' => 'Nombre(s)','required' => 'required')) }}
         </div>
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Apellidos:</label>
           {{ Form::text('apellidos', '', array('id' => 'apellidos',  'placeholder' => 'Apellidos','required' => 'required')) }}
         </div>
         
                  <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
           {{ Form::text('fecha_nacimiento', '', array('id' => 'fecha_nacimiento',  'placeholder' => 'Correo','required' => 'required')) }}
         </div>
         
           <div class="form-group">
           <label for="recipient-name" class="col-form-label">Estudios:</label>
         {!! Form::textarea('estudios', null, ['id' => 'estudios', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
         </div>
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Experiencia:</label>
         {!! Form::textarea('experiencia', null, ['id' => 'experiencia', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
         </div>
         
        
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Elige una nueva Foto:</label>
           {{ Form::file('foto', array('id' => 'foto')) }}
         </div>
         
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
           {{ Form::email('correo', '', array('id' => 'correo',  'placeholder' => 'Correo','required' => 'required')) }}
         </div>
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Nombre de usuario:</label>
           {{ Form::text('nombre_usuario', '', array('id' => 'nombre_usuario',  'placeholder' => 'Nombre de usuario','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Password:</label>
           {{ Form::text('contraseña', '', array('id' => 'contraseña',  'placeholder' => 'Password','required' => 'required')) }}
         </div>
         
         
         <div class="modal-footer">
       {!! Form::submit( 'Insertar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
       {{ Form::close() }}
     </div>
   </div>
 </div>
</div>

<!-- model editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog"  aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <?php
           $query = "select * from categoria ";

       $data=DB::select($query);

       ?>
        
      {{ Form::open(array('action' => 'InstructorController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
        <div class="form-group">
           {{ Form::hidden('id_instructor', '', array('id' => 'id_instructor',  'placeholder' => 'Id')) }}
          
        </div>
        
      <div class="form-group">
           <label for="recipient-name" class="col-form-label">Nombre(s):</label>
           {{ Form::text('nombre', '', array('id' => 'nombre',  'placeholder' => 'Nombre(s)','required' => 'required')) }}
         </div>
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Apellidos:</label>
           {{ Form::text('apellidos', '', array('id' => 'apellidos',  'placeholder' => 'Apellidos','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
           {{ Form::text('fecha_nacimiento', '', array('id' => 'fecha_nacimiento',  'placeholder' => 'Correo','required' => 'required')) }}
         </div>
        
           <div class="form-group">
           <label for="recipient-name" class="col-form-label">Estudios:</label>
         {!! Form::textarea('estudios', null, ['id' => 'estudios', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
         </div>
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Experiencia:</label>
         {!! Form::textarea('experiencia', null, ['id' => 'experiencia', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
         </div>
         
        
           <div class="form-group">
          <label for="recipient-name" class="col-form-label">Nota: Opcional elegir nuevafoto</label>
        </div>
        
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Elige una nueva Foto:</label>
           {{ Form::file('foto', array('id' => 'foto')) }}
         </div>
         
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
           {{ Form::email('correo', '', array('id' => 'correo',  'placeholder' => 'Correo','required' => 'required')) }}
         </div>
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Nombre de usuario:</label>
           {{ Form::text('nombre_usuario', '', array('id' => 'nombre_usuario',  'placeholder' => 'Nombre de usuario','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Password:</label>
           {{ Form::text('contraseña', '', array('id' => 'contraseña',  'placeholder' => 'Password','required' => 'required')) }}
         </div>
        
        <div class="modal-footer">
      {!! Form::submit( 'Actualizar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
</div>

@section('scripts')
<script type="text/javascript">
    
$('#editModal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id_instructor= button.data('id')
var estudios = button.data('estudios')
var experiencia=button.data('experiencia')

var fecha_nacimiento=button.data('fecha_nacimiento')
var nombre=button.data('nombre')
var apellidos=button.data('apellidos')
var usu=button.data('usu')
var pass=button.data('password')
var correo=button.data('correo')

var modal = $(this)
modal.find('#id_instructor').val(id_instructor)
modal.find('#estudios').val(estudios);
modal.find('#experiencia').val(experiencia)

modal.find('#fecha_nacimiento').val(fecha_nacimiento)
modal.find('#nombre').val(nombre);
modal.find('#apellidos').val(apellidos);    
modal.find('#nombre_usuario').val(usu)
modal.find('#contraseña').val(pass);
modal.find('#correo').val(correo);    

});

$(document).ready(function() {
 var oTable = $('#table_id').dataTable( {
   "scrollX": true,
   "autoWidth": false,
         "responsive": true,
        "paging": true,
   "language": {
               "emptyTable":            "No hay datos disponibles en la tabla.",
               "info":                       "_START_ - _END_ de _TOTAL_ ",
               "infoEmpty":            "Vacío",
               "infoFiltered":            "",
               "infoPostFix":            "(Resultados)",
               "lengthMenu":            "Mostrar _MENU_ registros",
               "loadingRecords":        "Cargando...",
               "processing":            "Procesando...",
               "search":                "Buscar:",
               "searchPlaceholder":    "Dato para buscar",
               "zeroRecords":            "No se han encontrado coincidencias.",
               "paginate": {
                   "first":            "Primera",
                   "last":                "Última",
                   "next":                "Siguiente",
                   "previous":            "Anterior"
               },
               "aria": {
                   "sortAscending":    "Ordenación ascendente",
                   "sortDescending":    "Ordenación descendente"
               }
           },
           "lengthMenu":        [[ 10, 20, 25, 50, -1], [ 10, 20, 25, 50, "Todos"]],
           "iDisplayLength":    10,
           "bJQueryUI":        false,
           "columns" : [
               {"data": 0},
               {"data": 1},
               {"data": 2},
               {"data": 3},
                {"data": 4,'orderable': false, 'searchable': false}
              
           ],

           "dom": "<'row'<'col-sm-7 col-md-4'l><'col-sm-6 col-md-3'f>>" +
                  "<'row'<'col-sm-13 col-md-11' tr>>" +
                  "<'row'<'col-sm-7 col-md-4'i><'col-sm-6 col-md-3'p>>",

 });
       $('label').addClass('form-inline');
       $('select, input[type="search"]').addClass('form-control input-sm');
 
 /*$(window).bind('resize', function () {
   table.columns.adjust().draw();
 } );*/
} );

</script>
<script type="text/javascript">

$('#deleteModal').on('show.bs.modal', function (event) {
 var button = $(event.relatedTarget)
 var id = button.data('id')
 var nombre_video=button.data('nombre')
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el usuario: ' +nombre_video+'?')
 document.forms[0].id_instructor.value=id

});

</script>


@stop

@stop