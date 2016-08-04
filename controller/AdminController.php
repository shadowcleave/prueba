<?php
require_once 'libs/password.php';
class AdminController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        //Creamos el objeto usuario
        $admin = new Admin($this->adapter);
        //Conseguimos todos los usuarios
        $alladmins = $admin->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Admin/admin", array("alladmins" => $alladmins)
        );
    }

    public function visualizar() {
        if (isset($_GET["id_admin"])) {
            $id_admin = (int) $_GET["id_admin"];

            $admins = new Admin($this->adapter);
            $admin = $admins->getById($id_admin, "id_admin");

            $this->view('admin/view', array(
                "admin" => $admin
            ));
        }
    }

    public function crearAdmin() {
$this->validateSession(array(1, 2));
        if (isset($_POST["email"])) {

            $admins = new Admin($this->adapter);
            $admins->setNombre($_POST["nombre"]);
            $admins->setEmail($_POST["email"]);
            
            $options=['cost' => 12, 'salt' =>'This is the ADSI project salt'];
            $admis->setContrasenna(password_hash($contrasenna, PASSWORD_BCRYPT,$options));
            
            $admins->setTelefono($_POST["telefono"]);
            $save = $admins->save();
           // print_r($save);
              $this->redirect("admin", "admin");

        }
       $this->view("admin/create", array());

    }

    public function modificarAdmin() {
        if (isset($_GET["id_admin"])) {
            $id_admin = (int) $_GET["id_admin"];

            $admins = new Admin($this->adapter);
            $admin = $admins->getById($id_admin, "id_admin");
            $this->view("admin/update", array("admin" => $admin));
        }
    }

    public function actualizarAdmin() {
        if (isset($_POST['nombre'])) {

            $id_admin = isset($_POST['id_admin']) ? $_POST['id_admin'] : "";
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
            $email= isset($_POST['email'])?$_POST['email']:"";
            $contrasenna= isset($_POST['contrasenna'])?$_POST['contrasenna']:"";

            $admins = new Admin($this->adapter);
            $admins->setNombre($nombre);
            $admins->setEmail($email);
            
            $options=['cost' => 12, 'salt' =>'This is the ADSI project salt'];
            $admis->setContrasenna(password_hash($contrasenna, PASSWORD_BCRYPT,$options));
            
            $admins->setId_admin($id_admin);
            $update = $admins->update();

            $this->redirect("admin", "admin");
        }
    }

    public function borrarAdmin() {
        if (isset($_GET["id_admin"])) {
            $id_admin = (int) $_GET["id_admin"];
            $adm = new Admin($this->adapter);
        //if($this->db()->errno){
          //              echo 'No es posible eliminar por problemas de llave foránea.

//';} else {
    


           $error= $adm->deleteById("id_admin", $id_admin);
        $this->redirect("admin", "admin", $error);
}
        }
    }

//}

?>
