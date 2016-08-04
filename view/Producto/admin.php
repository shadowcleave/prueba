<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("producto","borrarProducto"); ?>&cod_producto=";
</script>
<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("producto","crearProducto"); ?>" class="list-group-item ">Crear Producto</a>
  <a href="<?php echo $helper->url("producto","admin"); ?>" class="list-group-item active ">Listar Producto</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Codigo producto</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Accion</th>


  </tr>
        <?php
        foreach ($allpro as $pro){?>

  <tr>

    <td><?php  echo $pro->cod_producto; echo'<br>';?></td>
    <td><?php  echo $pro->nombre; echo '<br>';?></td>
    <td><?php  echo $pro->precio; echo '<br>';?></td>

    <td>
      <a href="<?php echo $helper->url("producto","visualizar"); ?>&cod_producto=<?php echo $pro->cod_producto; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>
    <a class="btnEliminarItem btn btn-danger" id="cod_producto-<?php echo $pro->cod_producto; ?>" href="#" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
      <a href="<?php echo $helper->url("producto","modificarProducto"); ?>&cod_producto=<?php echo $pro->cod_producto; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>

 </tr>

    <?php } ?>

  <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿REALMENTE DESEA ELIMINAR ESTE PRODUCTO?</h4>
              </div>
              <div class="modal-body">
                <p>Si elimina este producto se borrara de todos los formularios.</p>
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
  
