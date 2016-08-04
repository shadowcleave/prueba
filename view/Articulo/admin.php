<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("articulo","borrarArticulo"); ?>&id_articulo=";
</script>
<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("articulo","crearArticulo"); ?>" class="list-group-item ">Crear Articulo</a>
  <a href="<?php echo $helper->url("articulo","admin"); ?>" class="list-group-item active ">Listar Articulo</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Id_articulo</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>CRUD</th>


  </tr>
        <?php
        foreach ($allarts as $art){?>

  <tr>

    <td><?php  echo $art->id_articulo; echo'<br>';?></td>
    <td><?php  echo $art->nombre; echo '<br>';?></td>
    <td><?php  echo $art->descripcion; echo '<br>';?></td>

    <td>
      <a href="<?php echo $helper->url("articulo","visualizar"); ?>&id_articulo=<?php echo $art->id_articulo; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>
      <a class="btnEliminarItem btn btn-danger" id="id_articulo-<?php echo $art->id_articulo; ?>" href="#" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
      <a href="<?php echo $helper->url("articulo","modificarArticulo"); ?>&id_articulo=<?php echo $art->id_articulo; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>

 </tr>

    <?php } ?>

 <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿REALMENTE DESEA ELIMINAR ESTE ARTICULO ?</h4>
              </div>
              <div class="modal-body">
                <p>Si elimina este articulo se borrara de todos los formularios.</p>
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

