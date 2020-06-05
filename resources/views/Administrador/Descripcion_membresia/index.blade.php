@extends('welcome2')
@section('contenido')

<div class="container justify-content-center align-items-center">
  <br>
    <h2 style="text-align:center;">Administración de descripción de membresias</h2>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>

  <div class="table-responsive" style=" border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;">
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="margin: 0 auto;">
          <thead>
          <tr>
              
              <th>Tipo de membresia</th>
              <th>Descripción</th>
              <th>Acciones</th>
              
          </tr>
          </thead>
          <tbody>
          @foreach($descripciones_membresia as $descripcion)
              <tr>
              <td>{{ $descripcion->nombre_membresia}}</td>
                  <td>{{ $descripcion->descripcion}}</td>
                  
                  <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $descripcion->id_descripcion;?>" data-descripcion="<?php echo $descripcion->descripcion;?>"  data-nombre="<?php echo $descripcion->nombre_membresia;?>" >Eliminar</button>
                      
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-nombre="<?php echo $descripcion->id_tipo_membresia;?>"   data-id="<?php echo $descripcion->id_descripcion;?>" data-descripcion="<?php echo $descripcion->descripcion;?>" >Editar</button>
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
     {{ Form::open(array('action' => 'Descripcion_membresiaController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_descripcion') }}
         
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
     <?php
          
         
         $query3 = "select *from tipo_memebresia ";

       $data3=DB::select($query3);

       ?>

     {{ Form::open(array('action' => 'Descripcion_membresiaController@insertar', 'method' => 'post','id'=>'descripcion_especificacion','name'=>'descripcion_especificacion')) }}
 
         
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Tipo de membresia:</label>
           <select class="form-control" name="id_tipo_membresia" required  id="id_tipo_membresia" >
           <option value="" disabled selected>Elige un tipo de membresia</option>
           @foreach ($data3 as $item)
           <option value="{{ $item->id_tipo_membresia }}" > {{ $item->nombre_membresia }} </option>
           @endforeach    </select>
         </div>
         
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Descripción:</label>
         {!! Form::textarea('descripcion', null, ['id' => 'descripcion', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
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
         
         $query3 = "select *from tipo_memebresia ";

       $data3=DB::select($query3);

       ?>
        
      {{ Form::open(array('action' => 'Descripcion_membresiaController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
        <div class="form-group">
           {{ Form::hidden('id_descripcion', '', array('id' => 'id_descripcion',  'placeholder' => 'Id')) }}
          
        </div>
        
                <div class="form-group">
           <label for="recipient-name" class="col-form-label">Tipo de membresia:</label>
           <select class="form-control" name="id_tipo_membresia" required  id="id_tipo_membresia" >
           <option value="" disabled selected>Elige un tipo de membresia</option>
           @foreach ($data3 as $item)
           <option value="{{ $item->id_tipo_membresia }}" > {{ $item->nombre_membresia }} </option>
           @endforeach    </select>
         </div>
         
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Descripción:</label>
         {!! Form::textarea('descripcion', null, ['id' => 'descripcion', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
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
var id= button.data('id')
var nombre=button.data('nombre')
var descripcion=button.data('descripcion')

var modal = $(this)
modal.find('#id_descripcion').val(id)
modal.find('#id_tipo_membresia').val(nombre)
modal.find('#descripcion').val(descripcion);


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
 var descripcion=button.data('descripcion')
 var nombre=button.data('nombre')
 
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar la descripcion : ' +descripcion+' del tipo de membresia: '+nombre+'?')
 document.forms[0].id_descripcion.value=id
});

</script>

@stop

@stop