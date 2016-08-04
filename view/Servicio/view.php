
    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php

if  ($servicio){?>
    <a href="#" class="list-group-item active"> Detalles de Servicio</a>
  <a href="<?php echo $helper->url("servicios","crearServicio"); ?>" class="list-group-item "> Crear  Servicio</a>
  <a href="<?php echo $helper->url("servicios","modificarServicio"); ?>&id_servicio=<?php echo $servicio->id_servicio; ?>" class="list-group-item "> Actualizar  Servicio</a>
   <a href="<?php echo $helper->url("servicios","borrarServicio"); ?>&id_servicio=<?php echo $servicio->id_servicio; ?>" class="list-group-item "> eliminar Servicio</a>
  <a href="<?php echo $helper->url("servicios","admin"); ?>" class="list-group-item ">Listar Servicio</a>

</ul>

</div>


<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr>
    <th class="info">Id Servicio</th>
    <td class="danger"> <?php echo $servicio->id_servicio; ?></td>
    </tr>
  <tr>
      <th class="info">Nombre Servicio</th>
    <td class="danger"> <?php echo $servicio->nombre; ?></td>
    </tr>

    <tr>
      <th class="info">Tipo servicio</th>
    <td class="danger"> <?php echo $servicio->tiporservicio; ?></td>
    </tr>




<?php
}
?>
