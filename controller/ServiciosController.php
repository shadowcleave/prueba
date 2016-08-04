<?php
class ServiciosController extends ControladorBase{

	public $conectar;
	public $adapter;

	public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }
     public function admin(){

     	$servicio= new Servicios($this->adapter);

     	$allservi =$servicio->getAll();

     	$this->view ("Servicio/admin",array("allservi" => $allservi));
     }

     public function visualizar(){

     	if(isset($_GET["id_servicio"])){
     		$id_servicio= (int) $_GET['id_servicio'];

     		$servicios= new Servicios($this->adapter);
     		$servicio= $servicios->getById($id_servicio,"id_servicio");

     		$this-> view("Servicio/view",array("servicio" => $servicio
     			));
     	}
     }

     public function crearServicio(){

     	if(isset($_POST["nombre"])){

     		$nombre= isset($_POST["nombre"])?$_POST["nombre"]:"";
     		$tiposervicio= isset($_POST["tiposervicio"])?$_POST["tiposervicio"]:"";

     		$servicios= new Servicios($this->adapter);
     		$servicios->setNombre($nombre);
     		$servicios->setTiposervicio($tiposervicio);
     		$save=$servicios->save();
     		$this->redirect("Servicios","admin");


     }  
     $this->view("servicio/create", array());
}
     public function modificarServicio(){

     	if(isset($_GET['id_servicio'])){
     		$id_servicio=(int) $_GET["id_servicio"];

     		$servicios= new Servicios($this->adapter);
     		$servicio=$servicios->getById($id_servicio,"id_servicio");

     		$this->view("Servicio/update",array("servicio"=>$servicio
     			));
     	}
     }

     public function actualizarServicio(){
if (isset($_POST["nombre"])) {
     	$nombre= isset($_POST["nombre"])?$_POST["nombre"]:"";
     		$tiposervicio= isset($_POST["tiposervicio"])?$_POST["tiposervicio"]:"";
                $id_servicio= isset($_POST["id_servicio"])?$_POST["id_servicio"]:"";
     		$servicios= new Servicios($this->adapter);
     		$servicios->setNombre($nombre);
     		$servicios->setTiposervicio($tiposervicio);
                $servicios->setId_servicio($id_servicio);
     		$update=$servicios->update();

     		$this->redirect("Servicios","admin");
     }

     $this->view("servicio/update",array());


     }

     public function borrarServicio(){

     	if(isset($_GET["id_servicio"])){

     		$id_servicio= (int) $_GET["id_servicio"];

     		$serv= new Servicios($this->adapter);
     		$serv->deleteById("id_servicio",$id_servicio);
     		//print_r(array());
     		$this->redirect("Servicios","admin");
     	}
     }
}
?>