<?php

class ProductoController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        //Creamos el objeto usuario    
        $producto = new Producto($this->adapter);
        //Conseguimos todos los usuarios
        $allpro = $producto->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Producto/admin", array("allpro" => $allpro)
        );
    }

    public function visualizar() {
        if (isset($_GET['cod_producto'])) {
            $cod_producto = (int) $_GET['cod_producto'];

            $productos = new Producto($this->adapter);
            $producto = $productos->getById($cod_producto, "cod_producto");

            $this->view('producto/view', array(
                "producto" => $producto
            ));
        }
    }

    public function crearProducto() {
        if (isset($_POST["nombre"])) {
            $productos= new Producto($this->adapter);
            $productos->setNombre($_POST["nombre"]);
            $productos->setCaracteristicas($_POST["caracteristicas"]);
            $productos->setPrecio($_POST["Precio"]);
            $save = $productos->save();
              $this->redirect("producto", "admin");
           
        }
       $this->view("producto/create", array());
        
    }

    public function modificarProducto() {
        if (isset($_GET["cod_producto"])) {
            $cod_producto = (int) $_GET["cod_producto"];

            $productos = new Producto($this->adapter);
            $producto = $productos->getById($cod_producto, "cod_producto");
            $this->view("producto/update", array("producto" => $producto));
        }
    }

    public function actualizarProducto() {
        if (isset($_POST['nombre'])) {
            
            $cod_producto = isset($_POST["cod_producto"]) ? $_POST["cod_producto"] : "";
            $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
            $caracteristicas= isset($_POST["caracteristicas"])?$_POST["caracteristicas"]:"";
            $precio= isset($_POST["Precio"])?$_POST["Precio"]:"";
            
            $productos = new Producto($this->adapter);
            $productos->setNombre($nombre);
            $productos->setCaracteristicas($caracteristicas);
            $productos->setPrecio($precio);
              $productos->setCod_producto($cod_producto);
            $update = $productos->update();
          
           $this->redirect("producto", "admin");
        }

    }

    public function borrarProducto() {
        if (isset($_GET["cod_producto"])) {
            $cod_producto = (int) $_GET["cod_producto"];
            $pro = new Producto($this->adapter);

            $pro->deleteById("cod_producto", $cod_producto);
            $this->redirect("producto", "admin");
        }
    }

}

?>