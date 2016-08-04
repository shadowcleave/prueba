

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php if($servicio){

                  ?>
   <a href="#" class="list-group-item active"> Actualizar Usuario</a>

  <a href="<?php echo $helper->url("Servicios","crearServicio"); ?>" class="list-group-item "> Crear  Servicio</a>
  <a href="<?php echo $helper->url("Servicios","visualizar"); ?>&id_servicio=<?php echo $servicio->id_servicio; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("Servicios","admin"); ?>" class="list-group-item ">Listar Servicios</a>
</ul>
</div>

<form id="formID" action="<?php echo $helper->url("Servicios","actualizarServicio"); ?>" method="post" class="col-lg-5">
            <h3>Modificar servicio</h3>
            <hr/>

            Nombre: <input type="text" name="nombre" value="<?php echo $servicio->nombre?>" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>

            Tipo servicio: <input type="text" name="tiposervicio" value="<?php echo $servicio->tiposervicio?>" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>




            <br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } ?>
        </form>




<?php


?>
