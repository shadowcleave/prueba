
    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php if($usuario){

                  ?>
   <a href="#" class="list-group-item active"> Actualizar Usuario</a>

  <a href="<?php echo $helper->url("usuario","crearUsuario"); ?>" class="list-group-item "> Crear  Usuario</a>
  <a href="<?php echo $helper->url("usuario","visualizar"); ?>&id_usuario=<?php echo $usuario->id_usuario; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("usuario","admin"); ?>" class="list-group-item ">Listar Usuarios</a>
</ul>
</div>

<form id="formID" action="<?php echo $helper->url("usuario","actualizarUsuario"); ?>" method="post" class="col-lg-5">
            <h3>Modificar usuario</h3>
            <hr/>

            Nombre: <input type="text" name="nombre" value="<?php echo $usuario->nombre?>" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            Email: <input type="text" name="email" value="<?php echo $usuario->email?>" class="form-control validate[required, custom[email]] text-input"/>
            Contraseña: <input type="password" name="pass" value="<?php echo $usuario->contrasenna?>" class="form-control validate[required] text-input"/>


            <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario?>" />
            <br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } ?>
        </form>





<?php


?>
