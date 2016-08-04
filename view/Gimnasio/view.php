

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php

if  ($gimnasio){?>
    <a href="#" class="list-group-item active"> Detalles de Gimnasio</a>
  <a href="<?php echo $helper->url("gimnasio","crearGimnasio"); ?>" class="list-group-item "> Crear  gimnasio</a>
  <a href="<?php echo $helper->url("gimnasio","modificarGimnasio"); ?>&id_gimnasio=<?php echo $gimnasio->id_gimnasio; ?>" class="list-group-item "> Actualizar  Gimnasio</a>
   <a href="<?php echo $helper->url("gimnasio","borrarGimnasio"); ?>&id_gimnasio=<?php echo $gimnasio->id_gimnasio; ?>" class="list-group-item "> eliminar Gimnasio</a>
  <a href="<?php echo $helper->url("gimnasio","admin"); ?>" class="list-group-item ">Listar Gimnasio</a>

</ul>

</div>


<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr>
    <th class="info">Id gimnasio</th>
    <td class="danger"> <?php echo $gimnasio->id_gimnasio; ?></td>
    </tr>
  <tr>
      <th class="info">Nombre gimnasio</th>
    <td class="danger"> <?php echo $gimnasio->nombre; ?></td>
    </tr>

    <tr>
      <th class="info">Direccion gimnasio</th>
    <td class="danger"> <?php echo $gimnasio->direccion; ?></td>
    </tr>
    <tr>
      <th class="info">Telefono</th>
    <td class="danger"> <?php echo $gimnasio->telefono; ?></td>
    </tr>
    <tr>
      <th class="info">Precio inscripcion</th>
    <td class="danger"> <?php echo $gimnasio->precioinscr; ?></td>
    </tr>
    <tr>
      <th class="info">Precio mensualidad</th>
    <td class="danger"> <?php echo $gimnasio->preciomens; ?></td>
    </tr>
    <tr>
      <th class="info">Horarios</th>
    <td class="danger"> <?php echo $gimnasio->horarios; ?></td>
    </tr>




<?php
}
?>
