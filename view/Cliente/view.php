
    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php

if  ($cliente){?>
    <a href="#" class="list-group-item active"> Detalles de Cliente</a>
  <a href="<?php echo $helper->url("cliente","crearCliente"); ?>" class="list-group-item ">Crear Cliente</a>
  <a href="<?php echo $helper->url("cliente","modificarCliente"); ?>&id_cliente=<?php echo $cliente->id_cliente; ?>" class="list-group-item ">Actualizar Cliente</a>
   <a href="<?php echo $helper->url("cliente","borrarCliente"); ?>&id_cliente=<?php echo $cliente->id_cliente; ?>" class="list-group-item ">Eliminar Cliente</a>
  <a href="<?php echo $helper->url("cliente","admin"); ?>" class="list-group-item ">Listar Cliente</a>

</ul>

</div>


<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr>
    <th class="info">Id cliente</th>
    <td class="danger"> <?php echo $cliente->id_cliente; ?></td>
    </tr>
  <tr>
      <th class="info">Nombre</th>
    <td class="danger"> <?php echo $cliente->nombre; ?></td>
    </tr>

    <tr>
      <th class="info">Apellidos </th>
    <td class="danger"> <?php echo $cliente->apellidos; ?></td>
    </tr>
    <tr>
      <th class="info">Telefono</th>
    <td class="danger"> <?php echo $cliente->telefono; ?></td>
    </tr>
    <tr>
      <th class="info">Email</th>
    <td class="danger"> <?php echo $cliente->email ?></td>
    </tr>
    
    <tr>
      <th class="info">Contraseña</th>
    <td class="danger"> <?php echo $cliente->contrasenna ?></td>
    </tr>

  <tr>
      <th class="info">Peso</th>
    <td class="danger"> <?php echo $cliente->peso; ?></td>
    </tr>
  <tr>
      <th class="info">Estatura</th>
    <td class="danger"> <?php echo $cliente->estatura; ?></td>
    </tr>
  <tr>
      <th class="info">Genero</th>
    <td class="danger"> <?php echo $cliente->genero; ?></td>
    </tr>

      <tr>
      <th class="info">Incapacidades</th>
    <td class="danger"> <?php echo $cliente->incapacidades; ?></td>
    </tr>
    
     <tr>

         </div>






<?php
}
?>
