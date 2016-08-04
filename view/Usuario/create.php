

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("usuario","crearUsuario"); ?>" class="list-group-item active"> Crear  Usuario</a>
  <a href="<?php echo $helper->url("usuario","admin"); ?>" class="list-group-item ">Listar Usuario</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("usuario","crearUsuario"); ?>" method="post"  class="col-lg-5"  >
            <h3>Añadir usuario</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"  />
            Email: <input type="text" name="email" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[email]] text-input"/>
            Contraseña: <input type="password" name="passone" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/>
            Tipo de usuario: <input type="text" name="tipo" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            <!--Fecha de registro <input type="date" name="fecha" class="form-control"/>-->
            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>


<?php


?>
