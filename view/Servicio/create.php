

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("servicios","crearServicio"); ?>" class="list-group-item active"> Crear  Servicio </a>
  <a href="<?php echo $helper->url("servicios","admin"); ?>" class="list-group-item ">Listar Servicio</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("servicios","crearServicio"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Servicios</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            Tipo servicio: <input type="text" name="tiposervicio" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>

            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>




<?php


?>
