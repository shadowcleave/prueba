

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php if($admin){

                  ?>
   <a href="#" class="list-group-item active"> Actualizar Admin</a>

  <a href="<?php echo $helper->url("admin","crearAdmin"); ?>" class="list-group-item "> Crear  Admin</a>
  <a href="<?php echo $helper->url("admin","visualizar"); ?>&id_admin=<?php echo $admin->id_admin; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("admin","admin"); ?>" class="list-group-item ">Listar Admin</a>
</ul>
</div>

<form action="<?php echo $helper->url("admin","actualizarAdmin"); ?>" method="post" class="col-lg-5">
            <h3>Modificar admin</h3>
            <hr/>

            nombre: <input type="text" name="nombre" value="<?php echo $admin->nombre?>" class="form-control validate[required, custom[onlyLetterSp]] input-text"/>
            Email: <input type="text" name="email" value="<?php echo $admin->email?>" class="form-control validate[required, custom[email]] input-text"/>

            Telefono: <input type="text" name="telefono" value="<?php echo $admin->telefono?>" class="form-control validate[required, custom[onlyNumberSp]] input-text"/>


            <input type="hidden" name="id_admin" value="<?php echo $admin->id_admin?>" />
            <br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } ?>
        </form>





<?php


?>
