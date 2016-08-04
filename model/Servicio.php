<?php

class Servicios extends EntidadBase{
    
    private $id_servicio;
    private $tiposervicio;
    private $nombre;
    
    public function __construct($adapter) {
        $table = "servicios";
        parent::__construct($table, $adapter);
    }
    
    function getId_servicio() {
        return $this->id_servicio;
    }

    function getTiposervicio() {
        return $this->tiposervicio;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_servicio($id_servicio) {
        $this->id_servicio = $id_servicio;
    }

    function setTiposervicio($tiposervicio) {
        $this->tiposervicio = $tiposervicio;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

public function save(){
        $query="INSERT INTO servicios(nombre,tiporservicio) 
            VALUES ('".$this->nombre."',
                    '".$this->tiposervicio."');";
    $save = $this->db()->query($query);
       $newId=  $this->db()->insert_id;
    if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;
}
    public function update(){
       $query="UPDATE servicios SET tiporservicio='$this->tiposervicio',nombre='$this->nombre' where id_servicio='$this->id_servicio'";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
            
               return $update;
    }
}
