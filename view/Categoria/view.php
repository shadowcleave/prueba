
    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php

if  ($categoria){?>
    <a href="#" class="list-group-item active"> Detalles de Categoria</a>
  <a href="<?php echo $helper->url("categoria","crearCategoria"); ?>" class="list-group-item ">Crear Categoria</a>
  <a href="<?php echo $helper->url("categoria","modificarCategoria"); ?>&id_categoria=<?php echo $categoria->id_categoria; ?>" class="list-group-item "> Actualizar Categoria</a>
   <a href="<?php echo $helper->url("categoria","borrarCategoria"); ?>&id_categoria=<?php echo $categoria->id_categoria; ?>" class="list-group-item "> eliminar Categoria</a>
  <a href="<?php echo $helper->url("categoria","admin"); ?>" class="list-group-item ">Listar Categoria</a>

</ul>

</div>


<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr>
    <th class="info">Id categoria</th>
    <td class="danger"> <?php echo $categoria->id_categoria; ?></td>
    </tr>
  <tr>
      <th class="info">Nombre</th>
    <td class="danger"> <?php echo $categoria->nombre; ?></td>
    </tr>

    <tr>
      <th class="info">Descripción</th>
    <td class="danger"> <?php echo $categoria->descripcion; ?></td>
    </tr>

<?php
}
?>
