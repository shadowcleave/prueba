
    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
      <?php
      if($categoria){?>
   <a href="#" class="list-group-item active"> Actualizar Categoria</a>

  <a href="<?php echo $helper->url("categoria","crearCategoria"); ?>" class="list-group-item "> Crear  Categoria</a>
  <a href="<?php echo $helper->url("categoria","visualizar"); ?>&id_categoria=<?php echo $cliente->id_categoria; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("categoria","admin"); ?>" class="list-group-item ">Listar Categoria</a>
</ul>
</div>

<form id="formID" action="<?php echo $helper->url("categoria","actualizarCategoria"); ?>" method="post" class="col-lg-5">
            <h3>Modificar categoria</h3>
            <hr/>



            <!--nombre: <input type="text" name="nombre" value="<//?php echo $cliente->nombre?>" class="form-control"/>-->
            <input type="hidden" name="id_categoria" value="<?php echo $categoria->id_categoria?>" />
             Nombre: <input type="text" name="nombre" value="<?php echo $categoria->nombre?>" class="form-control validate[required]"/>
             Descripcion: <input type="text" name="descripcion" value="<?php echo $categoria->descripcion?>" class="form-control validate[required]"/>
<br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } ?>
        </form>





<?php


?>
