<?php
require_once 'libs/password.php';
class ClienteController extends ControladorBase{

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {
        $cliente = new Cliente($this->adapter);
        //Conseguimos todos los usuarios
        $allcli = $cliente->getAll();
        //cargamos la vista index y le pasamos los valores
        $this->view("Cliente/admin", array("allcli" => $allcli)
        );
    }

    public function visualizar() {
        if (isset($_GET['id_cliente'])) {
            $id_cliente = (int) $_GET['id_cliente'];

            $clientes = new Cliente($this->adapter);
            $cliente = $clientes->getById($id_cliente, "id_cliente");

            $this->view('cliente/view', array(
                "cliente" => $cliente
            ));
        }
    }

    public function crearCliente() {
        
      
        
        if (isset($_POST["nombre"])) {
            $clientes = new Cliente($this->adapter);
              $fotoperfil = isset($_POST["fotoperfil"]) ? $_POST["fotoperfil"] : "";
              $contrasenna = isset($_POST["contrasenna"]) ? $_POST["contrasenna"] : "";
               $nombre_archivo = $_FILES["fotoperfil"]["name"];
                $tipo_archivo = $_FILES["fotoperfil"]["type"];
                $tamano_archivo = $_FILES["fotoperfil"]["size"];

               if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 3000000))) {
                    echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg o .png<br><li>se permiten archivos de 3M máximo.</td></tr></table>";
                } else {
                    $fotoperfil = "Uploads/cliente/cliente_foto_" . $nombre_archivo;
                    if (move_uploaded_file($_FILES["fotoperfil"]["tmp_name"], $fotoperfil)) {
                        echo "El archivo ha sido cargado correctamente.";
                    } else {
                        echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                    }
                }
            $clientes->setNombre($_POST["nombre"]);
            $clientes->setApellidos($_POST["apellido"]);
            $clientes->setTelefono($_POST["telefono"]);
            $clientes->setEmail($_POST["email"]);
            
            $options=['cost' => 12, 'salt' =>'This is the ADSI project salt'];
            $clientes->setContrasenna(password_hash($contrasenna, PASSWORD_BCRYPT,$options));
            
            $clientes->setPeso($_POST["peso"]);
            $clientes->setEstatura($_POST["estatura"]);
            $clientes->setGenero($_POST["genero"]);
            $clientes->setFechanac($_POST["fechanac"]);
            $clientes->setIncapacidades($_POST["incapacidades"]);
           $clientes->setFotoperfil($_POST["fotoperfil"]);
           $clientes->setFk_id_usuario($_POST["fk_id_usuario"]);

         
           
           

             


            $save = $clientes->save();
            //print_r($save);
            $this->redirect("cliente", "admin");

        }else{
            $usuario= new Usuario($this->adapter);
            $usu = $usuario->getAll("id_usuario");
       $this->view("cliente/create", array("usu"=>$usu));
        }
    }

    public function modificarCliente() {
        if (isset($_GET["id_cliente"])) {
            $id_cliente = (int) $_GET["id_cliente"];
            $clientes = new Cliente($this->adapter);
            $cliente = $clientes->getById($id_cliente, "id_cliente");
            $this->view("Cliente/update", array("cliente" => $cliente));
        }
    }

    public function actualizarCliente() {
        if (isset($_GET['email'])) {
            $id_cliente = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : "";
            //$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
            //$apellidos = isset($_POST['apellido']) ? $_POST['apellido'] : "";
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
            $email = isset($_POST['email']) ? $_POST['email'] : "";
            $contrasenna = isset($_POST['contrasenna']) ? $_POST['contrasenna'] : "";
            $peso = isset($_POST['peso']) ? $_POST['peso'] : "";
            $estatura = isset($_POST['estatura']) ? $_POST['estatura'] : "";
            $fotoperfil= isset($_POST["fotoperfil"])? $_POST["fotoperfil"] : "";  

            $incapacidades = isset($_POST['incapacidades']) ? $_POST['incapacidades'] : "";
            //$fotoperfil = isset($_POST['fotoperfil']) ? $_POST['fotoperfil'] : "";
            
            

            $clientes = new Cliente($this->adapter);
            $clientes->setId_cliente($id_cliente);
            //$clientes->setNombre($nombre);

           $clientes->setTelefono($telefono);
            $clientes->setEmail($email);
            $options=['cost' => 12, 'salt' =>'This is the ADSI project salt'];
            $clientes->setContrasenna(password_hash($contrasenna, PASSWORD_BCRYPT,$options));
           $clientes->setPeso($peso);
           $clientes->setEstatura($estatura);

           $clientes->setIncapacidades($incapacidades);
            $clientes->setFotoperfil($fotoperfil);
            $update = $clientes->update();
           // print_r($update);
            $this->redirect("Cliente", "admin");
        }
        $this->view("Cliente/update", array());

    }

    public function borrarCliente() {
        if (isset($_GET["id_cliente"])) {
            $id_cliente = (int) $_GET["id_cliente"];
            $cli = new Cliente($this->adapter);

            $cli->deleteById("id_cliente", $id_cliente);
            $this->redirect("cliente", "admin");
        }
}}
