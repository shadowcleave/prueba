

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("admin","crearAdmin"); ?>" class="list-group-item active"> Crear  Admin</a>
  <a href="<?php echo $helper->url("admin","admin"); ?>" class="list-group-item ">Listar Admin</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("admin","crearAdmin"); ?>" method="post" class="col-lg-5">
            <h3>Añadir admin</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control validate[required, custom[onlyLetterSp]] input-text"/>
            Email: <input type="text" name="email" class="form-control validate[required, custom[email]] input-text"/>
            Contraseña: <input type="password" name="contrasenna" class="form-control validate[required] input-text"/>
            Telefono: <input type="text" name="telefono" class="form-control validate[required, custom[onlyNumberSp]] input-text"/>
            <!--Fecha de registro <input type="date" name="fecha" class="form-control"/>-->
            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>



<?php


?>
