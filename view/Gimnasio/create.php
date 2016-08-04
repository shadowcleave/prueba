

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("gimnasio","crearGimnasio"); ?>" class="list-group-item active"> Crear  Gimnasio</a>
  <a href="<?php echo $helper->url("gimnasio","admin"); ?>" class="list-group-item ">Listar Gimnasio</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("gimnasio","crearGimnasio"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Gimnasio</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            Direccion: <input type="text" name="direccion" class="form-control validate[required] text-input"/>
            Telefono:<input type="text" name="telefono" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
            Precio inscripcion: <input type="text" name="pinsc" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
            Precio mensual :<input type="text" name="pmens" class="form-control validate[required, custom[onlyNumberSp]] text-input" />
            Horarios:<input type="text" name="horarios" class="form-control validate[required] text-input"/>
            <!--Fecha de registro <input type="date" name="fecha" class="form-control"/>-->
               <label>Nivel usuario: </label>

            <select name="fk_id_admin" id="administrador" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/><br>
            <option value="">Seleccione una opcion</option>>
            <?php
            if ($admin != "") {
                foreach ($admin as $admin) {
                    echo "<option value='$admin->id_admin'>$admin->nombre</option>";
                }
            }
            ?>
            </select>
            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>




<?php


?>
