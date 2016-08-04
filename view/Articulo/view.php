

<div class="container">
    <br>
    <div class="row">
        <div class="col-md-3">

            <ul class="list-group">
                <?php if ($articulo) { ?>
                    <a href="#" class="list-group-item active"> Detalles de articulo</a>
                    <a href="<?php echo $helper->url("articulo", "crearArticulo"); ?>" class="list-group-item "> Crear  Articulo</a>
                    <a href="<?php echo $helper->url("articulo", "modificarArticulo"); ?>&id_articulo=<?php echo $articulo->id_articulo; ?>" class="list-group-item "> Actualizar  Articulo</a>
                    <a href="<?php echo $helper->url("articulo", "borrarArticulo"); ?>&id_articulo=<?php echo $articulo->id_articulo; ?>" class="list-group-item "> eliminar Articulo</a>
                    <a href="<?php echo $helper->url("articulo", "admin"); ?>" class="list-group-item ">Listar Articulo</a>

                </ul>

            </div>


            <div class="table-responsive">

                <table class="table tale-striped table-bordered table-hover">
                    <tr>
                        <th class="info">Id articulo</th>
                        <td class="danger"> <?php echo $articulo->id_articulo; ?></td>
                    </tr>
                    <tr>
                        <th class="info">Nombre articulo</th>
                        <td class="danger"> <?php echo $articulo->nombre; ?></td>
                    </tr>

                    <tr>
                        <th class="info">Descripcion</th>
                        <td class="danger"> <?php echo $articulo->descripcion; ?></td>
                    </tr>
                    <tr>


    <?php
}
?>
