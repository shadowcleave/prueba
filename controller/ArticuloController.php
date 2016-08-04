<?php

class ArticuloController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        //Creamos el objeto usuario    
        $articulo = new Articulo($this->adapter);
        //Conseguimos todos los usuarios
        $allarts = $articulo->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Articulo/admin", array("allarts" => $allarts)
        );
    }

    public function visualizar() {
        if (isset($_GET['id_articulo'])) {
            $id_articulo = (int) $_GET['id_articulo'];

            $articulos = new Articulo($this->adapter);
            $articulo = $articulos->getById($id_articulo, "id_articulo");

            $this->view('articulo/view', array(
                "articulo" => $articulo
            ));
        }
    }

    public function crearArticulo() {
        if (isset($_POST["nombre"])) {
            $articulos = new Articulo($this->adapter);
            $articulos->setNombre($_POST["nombre"]);
            $articulos->setDescripcion($_POST["descripcion"]);
            $articulos->setFk_id_categoria($_POST["fk_id_categoria"]);
             $articulos->setFk_id_admin($_POST["fk_id_admin"]);
            $save = $articulos->save();
              $this->redirect("articulo", "admin");
           
        }
       $this->view("articulo/create", array());
        
    }

    public function modificarArticulo() {
        if (isset($_GET['id_articulo'])) {
            $id_articulo = (int) $_GET['id_articulo'];

            $articulos = new Articulo($this->adapter);
            $articulo = $articulos->getById($id_articulo, "id_articulo");
            $this->view("articulo/update", array("articulo" => $articulo));
        }
    }

    public function actualizarArticulo() {
        if (isset($_GET['id_articulo'])) {
            
            $id_articulo = isset($_POST['id_articulo']) ? $_POST['id_producto'] : "";
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
            $descripcion= isset($_POST['descripcion'])?$_POST['descripcion']:"";
            
            
            $articulos = new Articulo($this->adapter);
            $articulos->setNombre($nombre);
            $articulos->setDescripcion($descripcion);
            $update = $articulos->update();

            $this->redirect("articulo", "admin");
        }
    }

    public function borrarArticulo() {
        if (isset($_GET["id_articulo"])) {
            $id_articulo = (int) $_GET["id_articulo"];
            $art = new Articulo($this->adapter);

            $art->deleteById("id_articulo", $id_articulo);
            $this->redirect("articulo", "admin");
        }
    }

}

?>