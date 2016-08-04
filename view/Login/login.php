<div>
    <?php echo (isset($errores) && $errores != "") ? $errores : ""; ?>
</div>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
    </head>
    <body>
        
        <form id="formID" action="<?php echo $helper->url("login","login"); ?>" method="post" class="col-lg-5">
            <h1> Login </h1>
            <hr>
                Por favor ingrese sus datos de acceso: <br><br>
                <th>
                <tr>Correo*: 
                    <td><input type="text" name="email" class="form-control"></td> <br> 
                Contraseña*: <input type="password" name="contrasenna" class="form-control"> <br> 
                <a href="">Recuperar contraseña</a> <br> <br>
                Los campos con * son obligatorios. <br> <br>
                <button type="submit" class="btn btn-success" value="Iniciar sesión"><span class="glyphicon glyphicon-apple>Iniciar sesión" </span>Iniciar sesión</button>
                </tr>
        </th>
</form>
    </body>
</html>