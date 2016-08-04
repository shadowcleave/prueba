
    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php if($producto){

                  ?>
   <a href="#" class="list-group-item active"> Actualizar Producto</a>

  <a href="<?php echo $helper->url("producto","crearProducto"); ?>" class="list-group-item "> Crear  Usuario</a>
  <a href="<?php echo $helper->url("producto","visualizar"); ?>&cod_producto=<?php echo $producto->cod_producto; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("producto","admin"); ?>" class="list-group-item ">Listar Usuarios</a>
</ul>
</div>

<form id="formID" action="<?php echo $helper->url("producto","actualizarProducto"); ?>" method="post" class="col-lg-5">
            <h3>Modificar Producto</h3>
            <hr/>

            Nombre: <input type="text" name="nombre" value="<?php echo $producto->nombre?>" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            Caracterisricas: <input type="text" name="caracteristicas" value="<?php echo $producto->caracteristicas?>" class="form-control validate[required] text-input"/>
            Precio: <input type="text" name="Precio" value="<?php echo $producto->precio?>" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>


            <input type="hidden" name="cod_producto" value="<?php echo $producto->cod_producto?>" />
            <br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } else {echo 'entra malparido';} ?>
        </form>






<?php


?>
