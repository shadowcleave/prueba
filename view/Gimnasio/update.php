

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php if($gimnasio){

                  ?>
     <script type="text/javascript">
            $(document).ready(function(){
                $('#administrador > option[value="<?php echo $gimnasio->fk_id_admin; ?>"]').attr('selected', 'selected');
            });
        </script>
   <a href="#" class="list-group-item active"> Actualizar Gimnasio</a>

  <a href="<?php echo $helper->url("gimnasio","crearGimnasio"); ?>" class="list-group-item "> Crear  Gimnasio</a>
  <a href="<?php echo $helper->url("gimnasio","visualizar"); ?>&id_gimnasio=<?php echo $gimnasio->id_gimnasio; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("gimnasio","admin"); ?>" class="list-group-item ">Listar gimnasio</a>
</ul>
</div>

<form id="formID" action="<?php echo $helper->url("gimnasio","actualizarGimnasio"); ?>" method="post" class="col-lg-5">
            <h3>Modificar Gimnasio</h3>
            <hr/>

            Nombre: <input type="text" name="nombre" value="<?php echo $gimnasio->nombre?>" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            Direccion: <input type="text" name="direccion" value="<?php echo $gimnasio->direccion?>" class="form-control validate[required] text-input"/>
            Horarios: <input type="text" name="horarios" value="<?php echo $gimnasio->horarios?>" class="form-control validate[required] text-input"/>

            Administrador: <select name="fk_id_admin" id="administrador" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/><br>
            <option value="">Seleccione una opcion</option>>
            <?php
            if ($admin != "") {
                foreach ($admin as $admin) {
                    echo "<option value='$admin->id_admin'>$admin->nombre</option>";
                }
            }
            ?>
            </select>
            <input type="hidden" name="id_gimnasio" value="<?php echo $gimnasio->id_gimnasio?>" />
            <br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } ?>
