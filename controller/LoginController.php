<?php
 

class LoginController extends ControladorBase {

    public $conectar;
    public $adapter;


    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
}
public function login(){
    if(isset($_POST["email"])&& $_POST["contrasenna"]){
        $email=isset($_POST["email"])? trim($_POST["email"]):"";
        $contrasenna=isset($_POST["contrasenna"])? trim($_POST["contrasenna"]):"";
       
        if($email==''||$contrasenna==''){
            
  
            $this->view("Login/login",array("errores" => "El usuario o contraseña deben introducirse"
                ));
        } 
        else{
           
            //Creamos un nuevo usuario
            $administrador= new Admin($this->adapter);
            $administrador->setEmail($email);
            $administrador->setContrasenna($contrasenna);
      
            if($administrador->validarLogin()){
                $this->redirect("admin", "admin");
               // $this->view("Admin/admin");
            } else {
         
                $this->view("Login/login", array(
                    "errores" => "El usuario o contraseña son incorrectos"
                ));
                  
            }
        }
    } else {
        $this->view("Login/login");
    }

   }
   
   public function logout(){
    //Destroy all sessions
    session_destroy();
    $this->redirect("login", "login");
   // $this->view("Login/login");
}

public function error($code=0){
    $codeMessage= (isset( $_GET ["msg"]) ? $_GET ["msg"] : $code );
    $message="";
    
    switch($codeMessage){
        
        case 1: 
            $message="No está autorizado para acceder a esta acción";
            break;
        case 2:
            $message="La acción que intenta cargar no existe";
            break;
        case 3:
            $message="Error desconocido";
            break;
    }
    $this->view("Login/error", array(
        "message" => $message
    ));
}
    }
    
    