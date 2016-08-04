<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/stilos.css">
 <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/template.css" type="text/css"/>
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/script.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/languajes/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/fileinput.js" type="text/javascript"></script>
  <title>Inicio</title>
         </head>

         <body>
             <div class="header">
                 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="conteiner">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm" >
         <span class="sr-only">Desplegar ocultar menú</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a href="#" class="navbar-brand"></a>
     </div>
     <!--menu-->
     <?php if(isset($_SESSION["fk_id_usuario"])&& $_SESSION["fk_id_usuario"] ==58){
     ?>
     <div class="collapse navbar-collapse " id="navegacion-fm">
       <div class="container">
       <ul class="nav navbar-nav">
            <li class=""><a href="#">Inicio</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Contenido<span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu" role="menu">
                   <li ><a href="#">crear</a></li>
                    <li><a href="#">Listar</a></li>
                 </ul>

                </li>
                <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Usuario<span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu" role="menu">
                   <li ><a href="<?php echo $helper->url("Usuario","crearUsuario"); ?>">crear</a></li>
                    <li><a href="<?php echo $helper->url("Usuario","admin"); ?>">Listar</a></li>
                 </ul>

                </li>
                <li role="menu" class="dropdown">
                    <a class="" href="<?php echo $helper->url("login","logout");?>">
                    Salir
                    <?php
                    if(isset($_SESSION["nombre"])){
                    echo "(" . $_SESSION["nombre"] . ")";
                    }
                    ?>
                    </a>
                </li>

              
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Cliente<span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                 <li ><a href="<?php echo $helper->url("cliente","crearCliente"); ?>">crear</a></li>
                  <li><a href="<?php echo $helper->url("cliente","admin"); ?>">Listar</a></li>
               </ul>

              </li>


              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Admin<span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                 <li ><a href="<?php echo $helper->url("admin","crearAdmin"); ?>">crear</a></li>
                  <li><a href="<?php echo $helper->url("admin","admin"); ?>">Listar</a></li>
               </ul>

              </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Producto<span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                 <li ><a href="<?php echo $helper->url("producto","crearProducto"); ?>">crear</a></li>
                  <li><a href="<?php echo $helper->url("producto","admin"); ?>">Listar</a></li>
               </ul>

              </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Servicio<span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                 <li ><a href="<?php echo $helper->url("Servicios","crearServicio"); ?>">crear</a></li>
                  <li><a href="<?php echo $helper->url("Servicios","admin"); ?>">Listar</a></li>
               </ul>

              </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Gimnasio<span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                 <li ><a href="<?php echo $helper->url("gimnasio","crearGimnasio"); ?>">crear</a></li>
                  <li><a href="<?php echo $helper->url("gimnasio","admin"); ?>">Listar</a></li>
               </ul>

              </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Articulo<span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                 <li ><a href="<?php echo $helper->url("articulo","crearArticulo"); ?>">crear</a></li>
                  <li><a href="<?php echo $helper->url("articulo","admin"); ?>">Listar</a></li>
               </ul>

              </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Categoria<span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                 <li ><a href="<?php echo $helper->url("categoria","crearCategoria"); ?>">crear</a></li>
                  <li><a href="<?php echo $helper->url("categoria","admin"); ?>">Listar</a></li>
               </ul>

              </li>









       </ul>
       <br>
       <br>





         </div>
         <?php
     }?>
     </div>
   </div>
  </nav>
  <br>
  <br>
  <br>
  <br>

</div>

             </div>

             <?php require_once 'view/' .$vista .'.php';?>

             <div class="footer">

             </div>
         </body>
</html>
