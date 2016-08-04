<?php
session_start();
class ControladorBase{

    protected $layout="/cms_layout";


    public function __construct() {
        require_once 'Conectar.php';
        require_once 'EntidadBase.php';
        require_once 'ModeloBase.php';

        foreach (glob("model/*.php")as $file){
            require_once $file;
        }
/* Validar que el tiempo de inactividad del usuario no supere el tiempo definido en la variable global
         * TIEMPO_INACTIVIDAD*/
        
        if(isset($_SESSION["timeout"])){
            //Calcular el tiempo de vida de la sesión
            $tiempoSesion= time() - $_SESSION["timeout"];
            if($tiempoSesion>(TIEMPO_INACTIVIDAD*60)){
                
                session_destroy();
                $this->redirect("Login", "logout");
            } else {
                //Establecer nuevamente el tiempo de inicio de la sesión
                $_SESSION["timeout"] = time();
            }
        }
    }

    public function view($vista,$datos=null){
        if($datos){
        foreach($datos as $id_aso=>$valor){
            ${$id_aso}=$valor;
        }
        }
        require_once 'core/AyudaVistas.php';
        $helper=new AyudaVistas();
        //require_once'view/'.$vista.'.php';
        require_once 'view/layouts'.$this->layout.'.php';
    }

    public function redirect($controlador=CONTROLADOR_DEFECTO, $accion=ACCION_DEFECTO, $error=0){
        header("Location:index.php?controller=".$controlador."&action=".$accion."&error=".$error);
    }
    
    /*Método para validar que exista un suario logueado y que esté autorizzado para acceder a la acción, en caso contrario
     * se redirige  a la vista Login.
     * Parámetros:
     * $tiposUsuarios: Array con los tipos de usuarios permitidos para acceder a una acción
     */
    
public function validateSession($tiposUsuarios=array()){
if(!isset($_SESSION["fk_id_usuario"])){
    $this->redirect("Login", "login");
} else {
    if(!in_array($_SESSION["fk_id_usuario"], $tiposUsuarios)){
        $this->redirect("Login","error&msg=1");
        
    }
}
}
}
