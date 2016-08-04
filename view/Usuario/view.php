<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("usuario","borrarUsuario"); ?>&id_usuario=";
</script>

    <div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
    <?php

if  ($usuario){?>
    <a href="#" class="list-group-item active"> Detalles de Usuario</a>
  <a href="<?php echo $helper->url("usuario","crearUsuario"); ?>" class="list-group-item "> Crear  Usuario</a>
  <a href="<?php echo $helper->url("usuario","modificarUsuario"); ?>&id_usuario=<?php echo $usuario->id_usuario; ?>" class="list-group-item "> Actualizar  Usuario</a>
   <a href="<?php echo $helper->url("usuario","borrarUsuario"); ?>&id_usuario=<?php echo $user->id_usuario; ?>" class="list-group-item" href="#"  data-toggle="modal" data-target="#myModal">eliminar </a>
  <a href="<?php echo $helper->url("usuario","admin"); ?>" class="list-group-item ">Listar Usuario</a>

</ul>

</div>


<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr>
    <th class="info">Id usuario</th>
    <td class="danger"> <?php echo $usuario->id_usuario; ?></td>
    </tr>
  <tr>
      <th class="info">Nombre usuario</th>
    <td class="danger"> <?php echo $usuario->nombre; ?></td>
    </tr>

    <tr>
      <th class="info">Email usuario</th>
    <td class="danger"> <?php echo $usuario->email; ?></td>
    </tr>
    
    <tr>
      <th class="info">Tipo de usuario</th>
    <td class="danger"> <?php echo $usuario->tipousuario ?></td>
    </tr>
    <tr>
      <th class="info">Fecha de registro</th>
    <td class="danger"> <?php echo $usuario->fecha_registro; ?></td>
    </tr>



<?php } ?>

 <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿REALMENTE DESEA ELIMINAR ESTA CATEGORIA ?</h4>
              </div>
              <div class="modal-body">
                <p>Si elimina esta categoria se borrara de todos los formularios.</p>
              </div>
              <div class="modal-footer">
                <a id="btnEliminar" href="#">
                  <button type="button" class="btn btn-access" >Eliminar</button>
                </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
                        </div>
                    </div>
                </div>

    