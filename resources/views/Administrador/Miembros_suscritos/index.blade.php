@extends('welcome2')
@section('contenido')

<div class="container justify-content-center align-items-center">
  <br>
    <h2 style="text-align:center;">Administración de miembros suscritos</h2>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>

  <div class="table-responsive" style=" border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;">
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="margin: 0 auto;">
          <thead>
          <tr>
          <th>Nombre completo</th>
              <th>Fecha de nacimiento</th>
              <th>Peso</th>
              <th>Estatura</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Ciudad</th>
              <th>Estado</th>
              <th>Tipo de membresia</th>
              <th>Fecha de pago</th>
              <th>Acciones</th>
            
          </tr>
          </thead>
          <tbody>
          @foreach($miembros_suscritos as $miembro)
              <tr>
                  <td>{{ $miembro->nombre_completo}}</td>
                  <td>{{ $miembro->fecha_nacimiento}}</td>
                  <td>{{ $miembro->peso}}</td>
                  <td>{{ $miembro->estatura}}</td>
                  <td>{{ $miembro->telefono}}</td>
                  <td>{{ $miembro->direccion}}</td>
                  <td>{{ $miembro->ciudad}}</td>
                  <td>{{ $miembro->estado}}</td>
                  <td>{{ $miembro->nombre_membresia}}</td>
                  <td>{{ $miembro->fecha_pago}}</td>
                  <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $miembro->id_cliente;?>" data-id2="<?php echo $miembro->id_membresia;?>" data-membresia="<?php echo $miembro->nombre_membresia;?>"   data-nombre="<?php echo $miembro->nombre_completo;?>">Eliminar</button>
                      
                      
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="<?php echo $miembro->id_cliente;?>" data-id2="<?php echo $miembro->id_membresia;?>" data-fecha="<?php echo $miembro->fecha_pago;?>"  >Editar</button>
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
     {{ Form::open(array('action' => 'Miembros_suscritosController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_cliente') }}
        {{ Form::hidden('id_membresia') }}
         
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
          
         
       $query2 = "SELECT id_cliente,concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo FROM cliente inner join usuario on usuario.id_usuario=cliente.id_cliente";

       $data2=DB::select($query2);
         
        $query3="select concat(periodo_suscripcion.periodo,' meses de la membresia ',tipo_memebresia.nombre_membresia)as concepto, membresia.id_membresia from membresia inner join periodo_suscripcion on periodo_suscripcion.id_periodo=membresia.id_periodo inner join tipo_memebresia on membresia.id_tipo_membresia=tipo_memebresia.id_tipo_membresia";
         $data3=DB::select($query3);

       ?>

     {{ Form::open(array('action' => 'Miembros_suscritosController@insertar', 'method' => 'post','id'=>'descripcion_especificacion','name'=>'descripcion_especificacion')) }}
 
       
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Nombre del cliente:</label>
           <select class="form-control" name="id_cliente" required  id="id_cliente" >
           <option value="" disabled selected>Elige nombre del cliente</option>
           @foreach ($data2 as $item)
           <option value="{{ $item->id_cliente }}" > {{ $item->nombre_completo }} </option>
           @endforeach    </select>
         </div>
         
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Membresia con periodo:</label>
           <select class="form-control" name="id_membresia" required  id="id_membresia" >
           <option value="" disabled selected>Elige membresia con periodo</option>
           @foreach ($data3 as $item)
           <option value="{{ $item->id_membresia }}" > {{ $item->concepto }} </option>
           @endforeach    </select>
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fecha:</label>
           {{ Form::text('fecha_pago', '', array('id' => 'fecha_pago',  'placeholder' => 'Escribe la fecha','required' => 'required')) }}
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
    
         
        $query3="select concat(periodo_suscripcion.periodo,' meses de la membresia ',tipo_memebresia.nombre_membresia)as concepto, membresia.id_membresia from membresia inner join periodo_suscripcion on periodo_suscripcion.id_periodo=membresia.id_periodo inner join tipo_memebresia on membresia.id_tipo_membresia=tipo_memebresia.id_tipo_membresia";
         $data3=DB::select($query3);

       ?>
        
      {{ Form::open(array('action' => 'Miembros_suscritosController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
        <div class="form-group">
           {{ Form::hidden('id_cliente', '', array('id' => 'id_cliente',  'placeholder' => 'Id')) }}
           {{ Form::hidden('mem2', '', array('id' => 'mem2',  'placeholder' => 'Id')) }}
        </div>
                
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Membresia con periodo:</label>
           <select class="form-control" name="id_membresia" required  id="id_membresia" >
           <option value="" disabled selected>Elige membresia con periodo</option>
           @foreach ($data3 as $item)
           <option value="{{ $item->id_membresia }}" > {{ $item->concepto }} </option>
           @endforeach    </select>
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fecha:</label>
           {{ Form::text('fecha_pago', '', array('id' => 'fecha_pago',  'placeholder' => 'YYYY-MM-DD','required' => 'required')) }}
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
 var id2 = button.data('id2')
  var fecha = button.data('fecha')

var modal = $(this)
modal.find('#id_cliente').val(id)
modal.find('#id_membresia').val(id2)
modal.find('#mem2').val(id2)
modal.find('#fecha_pago').val(fecha)

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
 var id2 = button.data('id2')
 var nombre=button.data('nombre')
 var membresia=button.data('membresia')
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar la membresia : ' +membresia+" del usuario: "+nombre+'?')
 document.forms[0].id_cliente.value=id
 document.forms[0].id_membresia.value=id2

});

</script>


@stop

@stop