

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php if($articulo){

                  ?>
   <a href="#" class="list-group-item active"> Actualizar Articulo</a>

  <a href="<?php echo $helper->url("articulo","crearArticulo"); ?>" class="list-group-item "> Crear  Articulo</a>
  <a href="<?php echo $helper->url("articulo","visualizar"); ?>&id_articulo=<?php echo $articulo->id_articulo; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("articulo","admin"); ?>" class="list-group-item ">Listar Articulo</a>
</ul>
</div>

<form id="formID" action="<?php echo $helper->url("articulo","actualizarArticulo"); ?>" method="post" class="col-lg-5">
            <h3>Modificar articulo</h3>
            <hr/>

            Nombre: <input type="text" name="nombre" value="<?php echo $articulo->nombre?>" class="form-control validate[required, custom[onlyLetterSp]] input-text"/>
            Descripcion: <input type="text" name="descripcion" value="<?php echo $articulo->descripcion?>" class="form-control validate[required] input-text"/>


            <input type="hidden" name="id_articulo" value="<?php echo $articulo->id_articulo?>" />
            <br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } ?>
        </form>





<?php


?>
