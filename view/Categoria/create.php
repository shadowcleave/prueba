

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("categoria","crearCategoria"); ?>" class="list-group-item active"> Crear  Categoria</a>
  <a href="<?php echo $helper->url("categoria","admin"); ?>" class="list-group-item ">Listar Categoria</a>
</ul>
</div>
    <form id="formID" action="<?php echo $helper->url("categoria","crearCategoria"); ?>" method="post" class="col-lg-5">
            <h3>Añadir categoria</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control validate[required, custom[onlyLetterSp]] input-text"/>
            Descripción: <input type="text" name="descripcion" class="form-control validate[required] input-text"/>
            
            
            

            <!--Fecha de registro <input type="date" name="fecha" class="form-control"/>-->
            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Crear</span></button>

        </form>



<?php


?>
