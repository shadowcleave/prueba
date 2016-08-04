<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("servicios","borrarServicio"); ?>&id_servicio=";
</script>
<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("Servicios","crearServicio"); ?>" class="list-group-item ">Crear Servicios</a>
  <a href="<?php echo $helper->url("Servicios","admin"); ?>" class="list-group-item active ">Listar Servicios</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Id_servicios</th>
    <th>Nombre</th>
    <th>Tipo de servicio</th>
    <th>CRUD</th>


  </tr>
        <?php
        foreach ($allservi as $type){?>

  <tr>

    <td><?php  echo $type->id_servicio; echo'<br>';?></td>
    <td><?php  echo $type->nombre; echo '<br>';?></td>
   <td><?php  echo $type->tiporservicio; echo '<br>';?></td>

    <td>
      <a href="<?php echo $helper->url("Servicios","visualizar"); ?>&id_servicio=<?php echo $type->id_servicio; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>
    <a class="btnEliminarItem btn btn-danger" id="id_servicio-<?php echo $type->id_servicio; ?>" href="#" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
      <a href="<?php echo $helper->url("servicios","modificarServicio"); ?>&id_servicio=<?php echo $type->id_servicio; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>

 </tr>

    <?php } ?>
  
 
  <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿REALMENTE DESEA ELIMINAR ESTE SERVICIO?</h4>
              </div>
              <div class="modal-body">
                <p>Si elimina este servicio se borrara de todos los formularios.</p>
              </div>
              <div class="modal-footer">
                <a id="btnEliminar" href="#">
                  <button type="button" class="btn btn-access" >Eliminar</button>
                </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
                        </div>
                    </div>
                </div>
