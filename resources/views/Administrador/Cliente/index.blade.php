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
          <th>Nombre completo</th>
              <th>Telefono</th>             
              <th>Dirección</th>
              <th>Ciudad</th>
              <th>Estado</th>
              <th>Peso</th>
              <th>Estatura</th>
              <th>Fecha de nacimiento</th>
              <th>Nombre de usuario</th>
              <th>Password</th>
              <th>Correo electronico</th>
              <th>Acciones</th>
            
          </tr>
          </thead>
          <tbody>
          @foreach($clientes as $cliente)
              <tr>
              <td>{{ $cliente->nombre_completo}}</td>
              <td>{{ $cliente->telefono}}</td>
              <td>{{ $cliente->direccion}}</td>
              <td>{{ $cliente->ciudad}}</td>
              <td>{{ $cliente->estado}}</td>
              <td>{{ $cliente->peso}}</td>
              <td>{{ $cliente->estatura}}</td>
              <td>{{ $cliente->fecha_nacimiento}}</td>
              <td>{{$cliente->nombre_usuario}}</td>
              <td>{{$cliente->contraseña}}</td>
              <td>{{ $cliente->correo}}</td>
                  
                  <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $cliente->id_cliente;?>" data-nombre="<?php echo $cliente->nombre;?>">Eliminar</button>
                            
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="<?php echo $cliente->id_cliente;?>"   data-telefono="<?php echo $cliente->telefono;?>" data-direccion="<?php echo $cliente->direccion;?>" data-ciudad="<?php echo $cliente->ciudad;?>"  data-estado="<?php echo $cliente->estado;?>" data-peso="<?php echo $cliente->peso;?>"  data-estatura="<?php echo $cliente->estatura;?>" data-fecha_nacimiento="<?php echo $cliente->fecha_nacimiento;?>" data-nombre="<?php echo $cliente->nombre;?>"  data-apellidos="<?php echo $cliente->apellidos;?>" data-usu="<?php echo $cliente->nombre_usuario;?>" data-password="<?php echo $cliente->contraseña;?>" data-correo="<?php echo $cliente->correo;?>">Editar</button>
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
     {{ Form::open(array('action' => 'ClienteController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_cliente') }}
         
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
     

     {{ Form::open(array('action' => 'ClienteController@insertar', 'method' => 'post','id'=>'descripcion_especificacion','name'=>'descripcion_especificacion')) }}
 
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Nombre(s):</label>
           {{ Form::text('nombre', '', array('id' => 'nombre',  'placeholder' => 'Nombre(s)','required' => 'required')) }}
         </div>
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Apellidos:</label>
           {{ Form::text('apellidos', '', array('id' => 'apellidos',  'placeholder' => 'Apellidos','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Telefono:</label>
           {{ Form::text('telefono', '', array('id' => 'telefono',  'placeholder' => 'Telefono','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Direccion:</label>
           {{ Form::text('direccion', '', array('id' => 'direccion',  'placeholder' => 'Telefono','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Ciudad:</label>
           {{ Form::text('ciudad', '', array('id' => 'ciudad',  'placeholder' => 'Ciudad','required' => 'required')) }}
         </div>

          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Estado:</label>
           {{ Form::text('estado', '', array('id' => 'estado',  'placeholder' => 'Estado','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Peso:</label>
           {{ Form::text('peso', '', array('id' => 'peso',  'placeholder' => 'Peso','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Estatura:</label>
           {{ Form::text('estatura', '', array('id' => 'estatura',  'placeholder' => 'Estatura','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
           {{ Form::text('fecha_nacimiento', '', array('id' => 'fecha_nacimiento',  'placeholder' => 'Fecha de nacimiento','required' => 'required')) }}
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
        
      {{ Form::open(array('action' => 'ClienteController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
        <div class="form-group">
           {{ Form::hidden('id_cliente', '', array('id' => 'id_cliente',  'placeholder' => 'Id')) }}
          
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
           <label for="recipient-name" class="col-form-label">Telefono:</label>
           {{ Form::text('telefono', '', array('id' => 'telefono',  'placeholder' => 'Telefono','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Direccion:</label>
           {{ Form::text('direccion', '', array('id' => 'direccion',  'placeholder' => 'Telefono','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Ciudad:</label>
           {{ Form::text('ciudad', '', array('id' => 'ciudad',  'placeholder' => 'Ciudad','required' => 'required')) }}
         </div>

          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Estado:</label>
           {{ Form::text('estado', '', array('id' => 'estado',  'placeholder' => 'Estado','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Peso:</label>
           {{ Form::text('peso', '', array('id' => 'peso',  'placeholder' => 'Peso','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Estatura:</label>
           {{ Form::text('estatura', '', array('id' => 'estatura',  'placeholder' => 'Estatura','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
           {{ Form::text('fecha_nacimiento', '', array('id' => 'fecha_nacimiento',  'placeholder' => 'Fecha de nacimiento','required' => 'required')) }}
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
var id_cliente= button.data('id')
var telefono = button.data('telefono')
var direccion=button.data('direccion')
var ciudad=button.data('ciudad')
var estado=button.data('estado')
var peso=button.data('peso')
var estatura=button.data('estatura')
var fecha_nacimiento=button.data('fecha_nacimiento')
var nombre=button.data('nombre')
var apellidos=button.data('apellidos')
var usu=button.data('usu')
var pass=button.data('password')
var correo=button.data('correo')

var modal = $(this)
modal.find('#id_cliente').val(id_cliente)
modal.find('#telefono').val(telefono)
modal.find('#direccion').val(direccion)
modal.find('#ciudad').val(ciudad);
modal.find('#estado').val(estado);
modal.find('#peso').val(peso)
modal.find('#estatura').val(estatura)
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
 document.forms[0].id_cliente.value=id

});

</script>


@stop

@stop