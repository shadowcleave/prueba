<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("usuario","borrarUsuario"); ?>&id_usuario=";
</script>

<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("usuario","crearUsuario"); ?>" class="list-group-item "> Crear  Usuario</a>
  <a href="<?php echo $helper->url("usuario","admin"); ?>" class="list-group-item active ">Listar Usuario</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Id usuario</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Accion</th>


  </tr>
        <?php
        foreach ($allusers as $user){?>

  <tr>

    <td><?php  echo $user->id_usuario; echo'<br>';?></td>
    <td><?php  echo $user->nombre; echo '<br>';?></td>
    <td><?php  echo $user->email; echo '<br>';?></td>

    <td>
      <a href="<?php echo $helper->url("usuario","visualizar"); ?>&id_usuario=<?php echo $user->id_usuario; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>
     <a class="btnEliminarItem btn btn-danger" id="id_usuario-<?php echo $user->id_usuario; ?>" href="#" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
      <a href="<?php echo $helper->url("usuario","modificarUsuario"); ?>&id_usuario=<?php echo $user->id_usuario; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>

 </tr>

    <?php } ?>

 <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿REALMENTE DESEA ELIMINAR ESTE USUARIO?</h4>
              </div>
              <div class="modal-body">
                <p>Si elimina este usuario se borrara de todos los formularios.</p>
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
  
 
