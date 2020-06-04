@extends('welcome2')
@section('contenido')

<div class="container justify-content-center align-items-center">
    <h2>Administración de Autos</h2>
  <br>
    
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>
<br>
  <div class="table-responsive" style=" border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;">
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="width:auto">
          <thead>
          <tr>
          <th>Descripcion del rol</th>

              <th>Acciones</th>
            
          </tr>
          </thead>
          <tbody>
          @foreach($roles as $rol)
              <tr>
              <td>{{ $rol->descripcion}}</td>
                 
                 
                  <td>
                  
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $rol->id_rol;?>"  data-descripcion="<?php echo $rol->descripcion;?>" >Eliminar</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal"  data-descripcion="<?php echo $rol->descripcion;?>"data-id="<?php echo $rol->id_rol;?>">Editar</button>
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
       <h5 class="modal-title" id="deleteModalLabel">Eliminar Auto</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
     {{ Form::open(array('action' => 'RolController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_rol') }}
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
       <h5 class="modal-title" id="insertModalLabel">Ingresar Nuevo Auto</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
    

     {{ Form::open(array('action' => 'RolController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Descripcion:</label>
           {{ Form::text('descripcion', '', array('id' => 'descripcion',  'placeholder' => 'Escribe un rol','required' => 'required')) }}
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
      <h5 class="modal-title" id="editModalLabel">Editar Auto</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      {{ Form::open(array('action' => 'RolController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Marca:</label>
           {{ Form::text('descripcion', '', array('id' => 'descripcion','class'=>'form-control',  'placeholder' => 'Escribe el rol ','required' => 'required')) }}
           {{ Form::hidden('id_rol', '', array('id' => 'id_rol',  'placeholder' => 'Id')) }}
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
var id = button.data('id')
var descripcion=button.data('descripcion')

var modal = $(this)
modal.find('#id_rol').val(id)
modal.find('#descripcion').val(descripcion)

});

$(document).ready(function() {
 var oTable = $('#table_id').dataTable( {
   "scrollX": true,
   "autoWidth": false,
     responsive: true,
        paging: true,
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
               
               {"data": 1,'orderable': false, 'searchable': false}
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
 var descripcion=button.data('descripcion')
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el registro: ' +descripcion+'?')
 document.forms[0].id_rol.value=id
});

</script>
@stop

@stop