<?php

class CategoriaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        //Creamos el objeto usuario    
        $categoria = new Categoria($this->adapter);
        //Conseguimos todos los usuarios
        $allcat = $categoria->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Categoria/admin", array("allcat" => $allcat)
        );
    }

    public function visualizar() {
        if (isset($_GET["id_categoria"])) {
            $id_categoria = (int) $_GET["id_categoria"];

            $categorias = new Categoria($this->adapter);
            $categoria = $categorias->getById($id_categoria, "id_categoria");

            $this->view('categoria/view', array(
                "categoria" => $categoria
            ));
        }
    }

    public function crearCategoria() {
        if (isset($_POST["nombre"])) {
            $categorias= new Categoria($this->adapter);
            $categorias->setNombre($_POST["nombre"]);
            $categorias->setDescripcion($_POST["descripcion"]);
            $save = $categorias->save();
              $this->redirect("categoria", "admin");
           
        }
       $this->view("categoria/create", array());
        
    }

    public function modificarCategoria() {
        if (isset($_GET["id_categoria"])) {
            $id_categoria = (int) $_GET["id_categoria"];

            $categorias = new Categoria($this->adapter);
            $categoria = $categorias->getById($id_categoria, "id_categoria");
            $this->view("categoria/update", array("categoria" => $categoria));
        }
    }

    public function actualizarCategoria() {
        if (isset($_POST['id_categoria'])) {
            $id_categoria = isset($_POST["id_categoria"]) ? $_POST["id_categoria"] : "";
            $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
            $descripcion= isset($_POST["descripcion"])?$_POST["descripcion"]:"";
            
            $categorias = new Categoria($this->adapter);
            $categorias->setNombre($nombre);
            $categorias->setDescripcion($descripcion);
            $categorias->setId_categoria($id_categoria);
            $update = $categorias->update();          
            $this->redirect("categoria", "admin");
        }else{
            $this->redirect("categoria", "admin"); 
        }
    }

    public function borrarCategoria() {
        if (isset($_GET["id_categoria"])) {
            $id_categoria = (int) $_GET["id_categoria"];
            $cat = new Categoria($this->adapter);

            $cat->deleteById("id_categoria", $id_categoria);
            $this->redirect("categoria", "admin");
        }
    }

}

?>