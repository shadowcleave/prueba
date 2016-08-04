
<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("cliente","borrarCliente"); ?>&id_cliente=";
</script>

<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("cliente","crearCliente"); ?>" class="list-group-item ">Crear Cliente</a>
  <a href="<?php echo $helper->url("cliente","admin"); ?>" class="list-group-item active ">Listar Cliente</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Id_cliente</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>CRUD</th>


  </tr>
        <?php
        foreach ($allcli as $cli){?>

  <tr>

    <td><?php  echo $cli->id_cliente; echo'<br>';?></td>
    <td><?php  echo $cli->nombre; echo '<br>';?></td>
    <td><?php  echo $cli->email; echo '<br>';?></td>

    <td>
      <a href="<?php echo $helper->url("cliente","visualizar"); ?>&id_cliente=<?php echo $cli->id_cliente; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>

<a class="btnEliminarItem btn btn-danger" id="id_cliente-<?php echo $cli->id_cliente; ?>" href="#" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a> 
            </a>

      <!--<a  id="id_cliente-<?php echo $cli->id_cliente; ?>" href="#" class="btnEliminarItem btn btn-danger" data-toggle="modal" data-target="#myModal"  role="button"><span class="glyphicon glyphicon-trash"></span></a>-->
      <a href="<?php echo $helper->url("cliente","modificarCliente"); ?>&id_cliente=<?php echo $cli->id_cliente; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>

 </tr>

    <?php } ?>
      <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿REALMENTE DESEA ELIMINAR ESTE CLIENTE?</h4>
              </div>
              <div class="modal-body">
                <p>Si elimina este cliente se borrara de todos los formularios.</p>
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

