<?php
require_once 'libs/password.php';
class UsuarioController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        //Creamos el objeto usuario
        $usuario = new Usuario($this->adapter);
        //Conseguimos todos los usuarios
        $allusers = $usuario->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Usuario/admin", array("allusers" => $allusers)
        );
    }

    public function visualizar() {
        if (isset($_GET["id_usuario"])) {
            $id_usuario = (int) $_GET["id_usuario"];

            $usuarios = new Usuario($this->adapter);
            $usuario = $usuarios->getById($id_usuario, "id_usuario");
            //print_r($usuario);
            $this->view('Usuario/view', array(
                "usuario" => $usuario
            ));
        }
    }

    public function crearUsuario() {
        if (isset($_POST["nombre"])) {
            $usuarios = new Usuario($this->adapter);
            $usuarios->setnombre($_POST["nombre"]);
            $usuarios->setemail($_POST["email"]);
            $usuarios->setcontrasenna($_POST["passone"]);
            $usuarios->settipousuario($_POST["tipo"]);
            $usuarios->setfecha_registro(DATE("y-m-d h:i:s"));
            $save = $usuarios->save();
            //print_r($save);
            $this->redirect("usuario", "admin");

        }
        //select para mostrar llaves foraneas en los formularios
        ////else{ $categoria=new Categoria ($this->adapter);
        //    $allcat=$categorias->getall("id_categoria");
        //$this->view("productos/create",array("allcat"=>$allcat))};
       $this->view("usuario/create", array());

    }

    public function modificarUsuario() {
        if (isset($_GET['id_usuario'])) {
            $id_usuario = (int) $_GET['id_usuario'];

            $usuarios = new Usuario($this->adapter);
            $usuario = $usuarios->getById($id_usuario, "id_usuario");
            $this->view("usuario/update", array("usuario" => $usuario));
        }
    }

    public function actualizarUsuario() {
        if (isset($_POST['id_usuario'])) {
            echo 'si entra';
            $nombre= isset($_POST['nombre'])? $_POST['nombre']:"";
            $id_usuario = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : "";
            $contrasenna = isset($_POST['pass']) ? $_POST['pass'] : "";
            $email = isset($_POST['email']) ? $_POST['email'] : "";
            $tipousuario= isset($_POST['tipo'])?$_POST['tipo']:"";

            $usuarios = new Usuario($this->adapter);
            $usuarios->setnombre($nombre);
            $usuarios->setid_usuario($id_usuario);
            $usuarios->setcontrasenna($contrasenna);
            $usuarios->setemail($email);
            $usuarios->settipousuario($tipousuario);
            $update = $usuarios->update();
//print_r($update);
          $this->redirect("usuario", "admin");
        }
        $this->view("usuario/update", array());
    }

    public function borrarUsuario() {
        if (isset($_GET["id_usuario"])) {
            $id_usuario = (int) $_GET["id_usuario"];
            $usu = new Usuario($this->adapter);

            $usu->deleteById("id_usuario", $id_usuario);
            $this->redirect("usuario", "admin");
        }
    }

}

?>
