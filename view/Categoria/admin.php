<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("categoria","borrarCategoria"); ?>&id_categoria=";
</script>

<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("categoria","crearCategoria"); ?>" class="list-group-item ">Crear Categoria</a>
  <a href="<?php echo $helper->url("categoria","admin"); ?>" class="list-group-item active ">Listar Categoria</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Id_categoria</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>CRUD</th>


  </tr>
        <?php
        foreach ($allcat as $cat){?>

  <tr>

    <td><?php  echo $cat->id_categoria; echo'<br>';?></td>
    <td><?php  echo $cat->nombre; echo '<br>';?></td>
    <td><?php  echo $cat->descripcion; echo '<br>';?></td>

    <td>
      <a href="<?php echo $helper->url("categoria","visualizar"); ?>&id_categoria=<?php echo $cat->id_categoria; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>
       <a class="btnEliminarItem btn btn-danger" id="id_categoria-<?php echo $cat->id_categoria; ?>" href="#" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a>
      <a href="<?php echo $helper->url("categoria","modificarCategoria"); ?>&id_categoria=<?php echo $cat->id_categoria; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>



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