<?php

class admin extends EntidadBase{
    
    private $id_admin;
    private $nombre;
    private $email;
    private $contrasenna;
    private $telefono ;
    
    public function __construct($adapter) {
        $table = "admin";
        parent::__construct($table, $adapter);
    }
    
    function getId_admin() {
        return $this->id_admin;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEmail() {
        return $this->email;
    }
     function getContrasenna() {
        return $this->contrasenna;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setId_admin($id_admin) {
        $this->id_admin = $id_admin;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEmail($email) {
        $this->email = $email;
    }
     function setContrasenna($contrasenna) {
        $this->contrasenna = $contrasenna;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    
public function save(){
          $query="INSERT INTO admin(nombre,email,telefono) 
            VALUES ('".$this->nombre."',
                    '".$this->email."',
                    '".$this->telefono."');";
          
    $save = $this->db()->query($query);
    return $save;
}
    public function update(){
       $query="UPDATE admin set telefono='$this->telefono',email='$this->email', nombre='$this->nombre' where id_admin='$this->id_admin'";
              $update = $this->db()->query($query);
               return $update;
    }
     public function validarLogin(){
  
        $resulSet=null;
        $query= $this->db()->query("SELECT * FROM admin WHERE email='$this->email'");
       
        if($row = $query->fetch_object()){
          
          // if(password_verify($this->contrasenna, $row->contrasenna)) 
          if($this->contrasenna==$row->contrasenna){
             
                $_SESSION['fk_id_usuario'] = $row->fk_id_usuario;
                $_SESSION['nombre'] = $row->nombre;
                //Establecer tiempo de inicio de la sesión
                $_SESSION['timeout'] = time();
                session_regenerate_id();
                return true;
                
            }
             
             
        }return false;
}

            } 
