<?php

class GimnasioController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        //Creamos el objeto usuario    
        $gimnasio = new Gimnasio($this->adapter);
        //Conseguimos todos los usuarios
        $allgym = $gimnasio->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Gimnasio/admin", array("allgym" => $allgym)
        );
    }

    public function visualizar() {
        echo "afuera";
        if (isset($_GET["id_gimnasio"])) {
            echo "entro";
            $id_gimnasio = (int) $_GET["id_gimnasio"];

            $gimnasios = new Gimnasio($this->adapter);
            $gimnasio = $gimnasios->getById($id_gimnasio, "id_gimnasio");

            $this->view("Gimnasio/view", array(
                "gimnasio" => $gimnasio
            ));
        }
    }

    public function crearGimnasio() {
        if (isset($_POST["nombre"])) {
            $gimnasios = new Gimnasio($this->adapter);
            $gimnasios->setId_gimnasio($_POST["id_gim"]);
            $gimnasios->setnombre($_POST["nombre"]);
            $gimnasios->setdireccion($_POST["direccion"]);
            $gimnasios->settelefono($_POST["telefono"]);
            $gimnasios->setprecioinscr($_POST["pinsc"]);
            $gimnasios->setpreciomens($_POST["pmens"]);
            $gimnasios->sethorarios($_POST["horarios"]);
             $gimnasios->setFk_id_admin($_POST["fk_id_admin"]);
            $save = $gimnasios->save();
              $this->redirect("gimnasio", "admin");
       
        }
        else{
            $admin= new admin($this->adapter);
            $ad=$admin->getAll("id_admin");
                
       $this->view("gimnasio/create", array("admin"=>$ad));
        }
    }

    public function modificarGimnasio() {
        if (isset($_GET["id_gimnasio"])) {
            $id_gimnasio = (int) $_GET["id_gimnasio"];

            $gimnasios = new Gimnasio($this->adapter);
            $gimnasio = $gimnasios->getById($id_gimnasio, "id_gimnasio");
            
            $administrador=new admin($this->adapter);
            $admin=$administrador->getAll("id_administrador");
            $this->view("Gimnasio/update", array("gimnasio" => $gimnasio, "admin"=>$admin));
        }
    }

    public function actualizarGimnasio() {
        
        if (isset($_POST['nombre'])) {
        
            $id_gimnasio = isset($_POST['id_gimnasio']) ? $_POST['id_gimnasio'] : "";
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
            $horarios= isset($_POST['horarios'])?$_POST['horarios']:"";
            $fk_id_admin= isset($_POST['fk_id_admin'])?$_POST['fk_id_admin']:"";
            
        
           
            $gimnasios = new Gimnasio($this->adapter);
            $gimnasios->setId_gimnasio($id_gimnasio);
            $gimnasios->setNombre($nombre);
            $gimnasios->setDireccion($direccion);
            $gimnasios->setHorarios($horarios);
                $gimnasios->setFk_id_admin($fk_id_admin);
           
            
            $update = $gimnasios->update();
//print_r($update);
            $this->redirect("gimnasio", "admin");
        }
        $this->view("Gimnasio/update", array());
    }

    public function borrarGimnasio() {
        if (isset($_GET["id_gimnasio"])) {
            $id_gimnasio = (int) $_GET["id_gimnasio"];
            $gim = new Gimnasio($this->adapter);

            $gim->deleteById("id_gimnasio", $id_gimnasio);
            $this->redirect("gimnasio", "admin");
        }
    }

}

?>