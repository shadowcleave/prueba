<?php

class Categoria extends EntidadBase{
    
    private $id_categoria ;
    private $nombre;
    private $descripcion;
    
    
    
    public function __construct($adapter) {
        $table = "categoria";
        parent::__construct($table, $adapter);
    }
    
    function getId_categoria() {
        return $this->id_categoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
        return $this;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }

    
    
public function save(){
          $query="INSERT INTO categoria(nombre,descripcion) 
            VALUES ('".$this->nombre."',
                    '".$this->descripcion."');";
          
    $save = $this->db()->query($query);
    $newId=  $this->db()->insert_id;
     if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;

}
    public function update(){
       $query="UPDATE categoria SET nombre='$this->nombre',descripcion='$this->descripcion' WHERE id_categoria='$this->id_categoria'";
      $update = $this->db()->query($query);
               if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
    }

