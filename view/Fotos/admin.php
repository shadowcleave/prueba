<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stilos.css">
  <title>Inicio</title>
</head>
<body>
        
     <br>
      <br>
      <br>
<div class="container">
<br>
<div class="row">
<div class="col-md-3">

<ul class="list-group">
  <a href="<?php echo $helper->url("fotos","crearFotos"); ?>" class="list-group-item ">Crear Foto</a>
  <a href="<?php echo $helper->url("fotos","admin"); ?>" class="list-group-item active ">Listar Foto</a>
</ul>

</div>
<!--formularios y tablas -->
<div class="container col-md-7 ">
<div class="table-responsive">

<table class="table tale-striped table-bordered table-hover">
  <tr class="info">

    <th>Id_foto</th>
    <th>Rutafoto</th>
    <th>CRUD</th>


  </tr>
        <?php
        foreach ($allphotos as $photo){?>
  
  <tr>  

    <td><?php  echo $user->id_foto; echo'<br>';?></td>
    <td><?php  echo $user->ruta_foto; echo '<br>';?></td>
    

    <td>
      <a href="<?php echo $helper->url("fotos","visualizar"); ?>&id_foto=<?php echo $user->id_foto; ?>" class="btn btn-info " role="button"><span class="glyphicon glyphicon-search"></span></a>
      <a href="<?php echo $helper->url("fotos","borrarFoto"); ?>&id_foto=<?php echo $user->id_foto; ?>" class="btn btn-danger " role="button"><span class="glyphicon glyphicon-trash"></span></a>
      <a href="<?php echo $helper->url("fotos","modificarFoto"); ?>&id_foto=<?php echo $user->id_foto; ?>" class="btn btn-success " role="button"><span class="glyphicon glyphicon-pencil"></span></a>
    </td>

 </tr>
            
    <?php } ?>
  <script src="js\jquery.js"></script>
  <script src="js\bootstrap.min.js"></script>
</body>
</html>
       


    