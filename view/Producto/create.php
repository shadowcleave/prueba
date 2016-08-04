

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("producto","crearProducto"); ?>" class="list-group-item active"> Crear  Producto</a>
  <a href="<?php echo $helper->url("producto","admin"); ?>" class="list-group-item ">Listar Producto</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("producto","crearProducto"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Producto</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            Caracteristicas: <input type="text" name="caracteristicas" class="form-control validate[required] text-input"/>
            Precio:<input type="text" name="Precio" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>


            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>




<?php


?>
