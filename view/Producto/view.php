

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php

if  ($producto){?>
    <a href="#" class="list-group-item active"> Detalles de Usuario</a>
  <a href="<?php echo $helper->url("producto","crearProducto"); ?>" class="list-group-item "> Crear  Usuario</a>
  <a href="<?php echo $helper->url("producto","modificarProducto"); ?>&cod_producto=<?php echo $producto->cod_producto; ?>" class="list-group-item "> Actualizar  Usuario</a>
   <a href="<?php echo $helper->url("producto","borrarProducto"); ?>&cod_producto=<?php echo $producto->cod_producto; ?>" class="list-group-item "> eliminar Usuario</a>
  <a href="<?php echo $helper->url("producto","admin"); ?>" class="list-group-item ">Listar Usuario</a>

</ul>

</div>


<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr>
    <th class="info">cod producto</th>
    <td class="danger"> <?php echo $producto->cod_producto; ?></td>
    </tr>
  <tr>
      <th class="info">Nombre producto</th>
    <td class="danger"> <?php echo $producto->nombre; ?></td>
    </tr>

    <tr>
      <th class="info">caracteristicas producto</th>
    <td class="danger"> <?php echo $producto->caracteristicas; ?></td>
    </tr>
    <tr>
      <th class="info">precio producto</th>
    <td class="danger"> <?php echo $producto->precio; ?></td>
    </tr>




<?php
}
?>
