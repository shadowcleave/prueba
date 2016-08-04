<?php

class Cliente extends EntidadBase{

      private $id_cliente;
      private $nombre;
      private $apellidos;
      private $telefono;
      private $email;
      private $contrasenna;
      private $peso;
      private $estatura;
      private $genero;
      private $fechanac;
      private $incapacidades;
      private $fotoperfil;
      private $fk_id_usuario;

      public function __construct($adapter) {
        $table = "cliente";
        parent::__construct($table, $adapter);
    }

      function getId_cliente() {
          return $this->id_cliente;
      }

      function getNombre() {
          return $this->nombre;
      }

      function getApellidos() {
          return $this->apellidos;
      }

      function getTelefono() {
          return $this->telefono;
      }

      function getEmail() {
          return $this->email;
      }

      function getContrasenna() {
          return $this->contrasenna;
      }

      function getPeso() {
          return $this->peso;
      }

      function getEstatura() {
          return $this->estatura;
      }

      function getGenero() {
          return $this->genero;
      }

      function getFechanac() {
          return $this->fechanac;
      }

      function getIncapacidades() {
          return $this->incapacidades;
      }

      function getFotoperfil() {
          return $this->fotoperfil;
      }

      function getFk_id_usuario() {
          return $this->fk_id_usuario;
      }

      function setId_cliente($id_cliente) {
          $this->id_cliente = $id_cliente;
          return $this;
      }

      function setNombre($nombre) {
          $this->nombre = $nombre;
          return $this;
      }

      function setApellidos($apellidos) {
          $this->apellidos = $apellidos;
          return $this;
      }

      function setTelefono($telefono) {
          $this->telefono = $telefono;
          return $this;
      }
 
      function setEmail($email) {
          $this->email = $email;
          return $this;
      }

      function setContrasenna($contrasenna) {
          $this->contrasenna = $contrasenna;
          return $this;
      }

      function setPeso($peso) {
          $this->peso = $peso;
          return $this;
      }

      function setEstatura($estatura) {
          $this->estatura = $estatura;
          return $this;
      }

      function setGenero($genero) {
          $this->genero = $genero;
          return $this;
      }

      function setFechanac($fechanac) {
          $this->fechanac = $fechanac;
          return $this;
      }

      function setIncapacidades($incapacidades) {
          $this->incapacidades = $incapacidades;
          return $this;
      }

      function setFotoperfil($fotoperfil) {
          $this->fotoperfil = $fotoperfil;
          return $this;
      }

      function setFk_id_usuario($fk_id_usuario) {
          $this->fk_id_usuario = $fk_id_usuario;
          return $this;
      }

public function save(){
          echo $query="INSERT INTO cliente(nombre,apellidos,telefono,email,contrasenna,peso,estatura,genero,fechanac,incapacidades,fotoperfil,fk_id_usuario) 
            VALUES ('".$this->nombre."',
                    '".$this->apellidos."',
                    '".$this->telefono."',
                    '".$this->email."',
                   '".$this->contrasenna."',
                  '".$this->peso."',
                  '".$this->estatura."',
                  '".$this->genero."',
                  '".$this->fechanac."',
                  '".$this->incapacidades."',
               '".$this->fotoperfil."',
                  '".$this->fk_id_usuario."');";
          
    $save = $this->db()->query($query);
    $newId=  $this->db()->insert_id;
    if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;
}
    public function update(){
       $query="UPDATE cliente set fotoperfil='this->fotoperfil', incapacidades='$this->incapacidades',peso='$this->peso',estatura='$this->estatura',contrasenna='$this->contrasenna',telefono='$this->telefono',email='$this->email' where id_cliente='$this->id_cliente'";
          $update = $this->db()->query($query);
            if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
               return $update;
}
public function validarLogin(){
        
        $resulSet=null;
        $query= $this->db()->query("SELECT * FROM cliente WHERE email='$this->email'");
        
        if($row = $query->fetch_object()){
            /*Se compara la contraseña ingresada por el usuario en el formulario de login con la que se encuentra 
             * almacenada en la base de datos
             */ 
            if(password_verify($this->contrasenna, $row->contrasenna)) {
                
                $_SESSION['fk_id_tipo_usuario'] = $row->fk_id_tipo_usuario;
                $_SESSION['nombre'] = $row->nombre;
                //Establecer tiempo de inicio de la sesión
                $_SESSION['timeout'] = time();
                session_regenerate_id();
                return true;
                
            }
             
             
        }return false;
}


    }