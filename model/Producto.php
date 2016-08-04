<?php

class Producto extends EntidadBase{
    private $cod_producto;
    private $nombre;
    private $caracteristicas;
    private $precio;
            
    public function __construct($adapter){
        $table="producto";
        parent::__construct($table,$adapter);
    }
    
    function getCod_producto() {
        return $this->cod_producto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCaracteristicas() {
        return $this->caracteristicas;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setCod_producto($cod_producto) {
        $this->cod_producto = $cod_producto;
        return $this;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    function setCaracteristicas($caracteristicas) {
        $this->caracteristicas = $caracteristicas;
        return $this;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
        return $this;
    }

public function save(){
        $query="INSERT INTO producto (nombre,caracteristicas,precio) 
            VALUES ('".$this->nombre."',
                 '".$this->caracteristicas."',
                       '".$this->precio."');";
    $save = $this->db()->query($query);
       $newId=  $this->db()->insert_id;
       if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;
                
    }
    
    public function update(){
        
        $query="UPDATE producto SET caracteristicas='$this->caracteristicas', nombre='$this->nombre', precio='$this->precio' WHERE cod_producto='$this->cod_producto'";
        $update = $this->db()->query($query);
        if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       
       return $update;
    }

    

}
