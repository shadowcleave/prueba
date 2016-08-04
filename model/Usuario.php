<?php

class Usuario extends EntidadBase{

    //private $adapter;
    private $id_usuario;
    private $tipousuario;
    private $nombre;
    private $contrasenna;
    private $email;
    private $fecha_registro;
    private $estado;

    public function __construct($adapter) {
        $table="usuario";
        parent::__construct($table,$adapter);

    }

    function getid_usuario() {
        return $this->id_usuario;
    }
function getnombre(){
    return $this->nombre;
}

    function gettipousuario() {
        return $this->tipousuario;
    }

    function getcontrasenna() {
        return $this->contrasenna;
    }

    function getemail() {
        return $this->email;
    }

    function getfecha_registro() {
        return $this->fecha_registro;
    }

    function getestado() {
        return $this->estado;
    }

    function setid_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function settipousuario($tipousuario) {
        $this->tipousuario = $tipousuario;
    }

    function setcontrasenna($contrasenna) {
        $this->contrasenna = $contrasenna;
    }

    function setemail($email) {
        $this->email = $email;
    }

    function setfecha_registro($fecha_registro) {
        $this->fecha_registro = $fecha_registro;
    }

    function setestado($estado) {
        $this->estado = $estado;
    }
    function setnombre($nombre){
        $this->nombre=$nombre;
    }


public function save(){
    $query="INSERT INTO usuario(nombre, email, contrasenna,tipousuario,fecha_registro)
            VALUES ('".$this->nombre."',
                    '".$this->email."',
                    '".$this->contrasenna."',
                        '".$this->tipousuario."',
                            '".$this->fecha_registro."');";
                                //'".$this->estado."');";


    $save = $this->db()->query($query);
    $newId=  $this->db()->insert_id;
     if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;
}

    public function update(){
    $query="UPDATE usuario SET nombre='$this->nombre', email='$this->email', contrasenna='$this->contrasenna',tipousuario='$this->tipousuario' where id_usuario='$this->id_usuario'";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
}
