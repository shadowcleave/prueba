
    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php

if  ($admin){?>
    <a href="#" class="list-group-item active"> Detalles de Admin</a>
  <a href="<?php echo $helper->url("admin","crearAdmin"); ?>" class="list-group-item "> Crear  Admin</a>
  <a href="<?php echo $helper->url("admin","modificarAdmin"); ?>&id_admin=<?php echo $admin->id_admin; ?>" class="list-group-item "> Actualizar  Admin</a>
   <a href="<?php echo $helper->url("admin","borrarAdmin"); ?>&id_admin=<?php echo $admin->id_admin; ?>" class="list-group-item "> eliminar Admin</a>
  <a href="<?php echo $helper->url("admin","admin"); ?>" class="list-group-item ">Listar Admin</a>

</ul>

</div>


<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr>
    <th class="info">Id admin</th>
    <td class="danger"> <?php echo $admin->id_admin; ?></td>
    </tr>
  <tr>
      <th class="info">Nombre </th>
    <td class="danger"> <?php echo $admin->nombre; ?></td>
    </tr>

    <tr>
      <th class="info">Email </th>
    <td class="danger"> <?php echo $admin->email; ?></td>
    </tr>
    <tr>
      <th class="info">Telefono</th>
    <td class="danger"> <?php echo $admin->telefono; ?></td>
    </tr>
    
    <tr>
      <th class="info">Contraseña</th>
    <td class="danger"> <?php echo $admin->contrasenna; ?></td>
    </tr>




<?php
}
?>
