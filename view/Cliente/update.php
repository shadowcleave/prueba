

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
      <?php
      if($cliente){?>
   <a href="#" class="list-group-item active"> Actualizar Cliente</a>

  <a href="<?php echo $helper->url("cliente","crearCliente"); ?>" class="list-group-item "> Crear  Cliente</a>
  <a href="<?php echo $helper->url("cliente","visualizar"); ?>&id_cliente=<?php echo $cliente->id_cliente; ?>" class="list-group-item ">ver detalles</a>
  <a href="<?php echo $helper->url("cliente","admin"); ?>" class="list-group-item ">Listar Cliente</a>
</ul>
</div>

<form id="formID" action="<?php echo $helper->url("cliente","actualizarCliente"); ?>" method="post" class="col-lg-5">
            <h3>Modificar cliente</h3>
            <hr/>



            <!--nombre: <input type="text" name="nombre" value="<//?php echo $cliente->nombre?>" class="form-control"/>-->
             Incapacidades: <input type="text" name="incapacidades" value="<?php echo $cliente->incapacidades?>" class="form-control validate[required]"/>
                Telefono: <input type="text" name="telefono" value="<?php echo $cliente->telefono?>" class="form-control validate[required, custom[onlyNumberSp]] input-text"/>
                 Email: <input type="text" name="email" value="<?php echo $cliente->email?>" class="form-control validate[required, custom[email]] input-text"/>
                 Contraseña: <input type="password" name="contrasenna" value="<?php echo $cliente->contrasenna?>" class="form-control validate[required] input-text"/>
            Peso: <input type="peso" name="peso" value="<?php echo $cliente->peso?>" class="form-control validate[required] input-text"/>
            Estatura: <input type="text" name="estatura" value="<?php echo $cliente->estatura?>" class="form-control validate[required] input-text"/>
            
            <?php echo $cliente->genero?>
            <?php echo $cliente->fechanac?>
            

            <input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente?>" />
            <br>
           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"> Guardar</span></button>




            <?php

                } ?>
        </form>





<?php


?>
