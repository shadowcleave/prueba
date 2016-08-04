<?php

class FotosController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        //Creamos el objeto usuario    
        $foto = new Fotos($this->adapter);
        //Conseguimos todos los usuarios
        $allphotos = $foto->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Fotos/admin", array("allphotos" => $allphotos)
        );
    }

    public function visualizar() {
        if (isset($GET['id_foto'])) {
            $id_foto = (int) $GET['id_foto1'];

            $fotos = new Fotos($this->adapter);
            $foto = $Fotos->getById($id_foto, "id_foto");

            $this->view('fotos/view', array(
                "fotos" => $fotos
            ));
        }
    }

    public function crearFoto() {
        if (isset($_POST["id_foto"])) {
            $fotos = new Fotos($this->adapter);
            $fotos->setRuta_foto($_POST["rutafoto"]);
            $save = $fotoos->save();
              $this->redirect("Fotos", "admin");
           
        }
       $this->view("fotos/create", array());
        
    }

    public function modificarFoto() {
        if (isset($_GET['id_foto'])) {
            $id_foto = (int) $_GET['id_foto'];

            $fotos = new Fotos($this->adapter);
            $foto = $fotos->getById($id_foto, "id_foto");
            $this->view("fotos/update", array("fotos" => $fotos));
        }
    }

    public function actualizarFoto() {
        if (isset($_POST['id_foto'])) {
            echo 'si entra';
            $ruta_foto= isset($_POST['rutafoto'])?$_POST['rutafoto']:"";
            
            $fotos = new Fotos($this->adapter);
            $fotos->setRuta_foto($ruta_foto);
            $update = $fotos->update();

            $this->redirect("fotos", "admin");
        } else echo'no entra';
    }

    public function borrarFoto() {
        if (isset($_GET["id_foto"])) {
            $id_foto = (int) $_GET["id_foto"];
            $photo = new Fotos($this->adapter);

            $photo->deleteById("id_foto", $id_foto);
            $this->redirect("fotos", "admin");
        }
    }

}

?>