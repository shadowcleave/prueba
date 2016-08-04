

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("cliente","crearCliente"); ?>" class="list-group-item active"> Crear  Cliente</a>
  <a href="<?php echo $helper->url("cliente","admin"); ?>" class="list-group-item ">Listar Cliente</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("cliente","crearCliente"); ?>" method="post"  class="col-lg-5">
            <h3>Añadir cliente</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control validate[required, custom[onlyLetterSp]] input-text"/>
            Apellido: <input type="text" name="apellido" class="form-control validate[required, custom[onlyLetterSp]] input-text"/>
            Telefono: <input type="text" name="telefono" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
            Email: <input type="text" name="email" class="form-control validate[required, custom[email]] input-text"/>
            Contraseña: <input type="password" name="contrasenna" class="form-control validate[required] input-text"/>
            Peso: <input type="text" name="peso" class="form-control validate[required] input-text"/>
            Estatura: <input type="text" name="estatura" class="form-control validate[required] input-text"/>
            Genero: <select class="selectpicker form-control validate[required] input-text " name="genero">
            <option>Masculino</option>
            <option>Femenino</option>
            <option>Otro</option>
            </select>

            Incapacidades: <input type="text" name="incapacidades" class="form-control validate[required] input-text"/>
            <label for="fotoperfil">Seleccione foto perfil:</label>
                                  

                <div class="form-group" enctype="multipart/form-data">
            <input name="fotoperfil" type="file" class="file" multiple=true data-preview-file-type="any"><span class="glyphicon glyphicon-floppy.open">
 </div>
          
            Usuario<select name="fk_id_usuario" id="administrador" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/><br>
            <option value="">Seleccione una opcion</option>>
            <?php
            if ($usu != "") {
                foreach ($usu as $u) {
                    echo "<option value='$u->id_usuario'>$u->nombre</option>";
                }
            }
            ?>
            </select>

            <!--Fecha de registro <input type="date" name="fecha" class="form-control"/>-->
            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>



<?php


?>
