<script type="text/javascript">
  var urlDelete = "<?php echo $helper->url("admin","borrarAdmin"); ?>&id_admin=";
</script>
<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("admin","crearAdmin"); ?>" class="list-group-item "> Crear Admin</a>
  <a href="<?php echo $helper->url("admin","admin"); ?>" class="list-group-item active ">Listar Admin</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

    <div id="error">
        <?php
        if(isset($_GET['error'])&& $_GET['error']!=0){
            
            switch($_GET['error']){
                
                case 1451:
                   
                    echo'No se pudo eliminar el registro, debido a que el registro está asociado a otra tabla';
                    break;
                case 1065:
                    echo'La sintáxis de la consulta no es correcta';
                    break;
                default : echo 'Hubo un error general';
            }
        }
        ?>
    </div>
    
<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Id_admin</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>CRUD</th>

<?php //if(isset($_SESSION["fk_id_usuario"])&& $_SESSION["fk_id_usuario"] ==58){
     ?>
  </tr>
        <?php
        foreach ($alladmins as $admin){?>

  <tr>

    <td><?php  echo $admin->id_admin; echo'<br>';?></td>
    <td><?php  echo $admin->nombre; echo '<br>';?></td>
    <td><?php  echo $admin->email; echo '<br>';?></td>

    <td>
      <a href="<?php echo $helper->url("admin","visualizar"); ?>&id_admin=<?php echo $admin->id_admin; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>
     <a class="btnEliminarItem btn btn-danger" id="id_admin-<?php echo $admin->id_admin; ?>" href="#" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></a> 
      <a href="<?php echo $helper->url("admin","modificarAdmin"); ?>&id_admin=<?php echo $admin->id_admin; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>

 </tr>

    <?php } ?>

 
  <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿REALMENTE DESEA ELIMINAR ESTE ADMIN?</h4>
              </div>
              <div class="modal-body">
                <p>Si elimina este admin se borrara de todos los formularios.</p>
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