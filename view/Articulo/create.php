

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("articulo","crearArticulo"); ?>" class="list-group-item active"> Crear  Articulo</a>
  <a href="<?php echo $helper->url("articulo","admin"); ?>" class="list-group-item ">Listar Articulo</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("articulo","crearArticulo"); ?>" method="post" class="col-lg-5">
            <h3>Añadir articulo</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control validate[required, custom[onlyLetterSp]] input-text"/>
            Descripcion: <input type="text" name="descripcion" class="form-control validate[required] input-text"/>
            <!--Fecha de registro <input type="date" name="fecha" class="form-control"/>-->
            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>


<?php


?>
