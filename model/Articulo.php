<?php
class Articulo extends EntidadBase{
    
    private $id_articulo;
    private $nombre;
    private $descripcion;
    private $fk_id_categoria;
    private $fk_id_admin;
    
    public function __construct($adapter) {
        $table = "articulo";
        parent::__construct($table, $adapter);
    }
    
    function getId_articulo() {
        return $this->id_articulo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFk_id_categoria() {
        return $this->fk_id_categoria;
    }

    function getFk_id_admin() {
        return $this->fk_id_admin;
    }

    function setId_articulo($id_articulo) {
        $this->id_articulo = $id_articulo;
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

    function setFk_id_categoria($fk_id_categoria) {
        $this->fk_id_categoria = $fk_id_categoria;
        return $this;
    }

    function setFk_id_admin($fk_id_admin) {
        $this->fk_id_admin = $fk_id_admin;
        return $this;
    }

public function save(){
    $query="INSERT INTO articulo(id_articulo,nombre,descripcion,fk_id_categoria,fk_id_admin) 
            VALUES (NULL,
            '".$this->id_articulo."',
                '".$this->nombre."',
                    '".$this->descripcion."',
                        '".$this->fk_id_categoria."',
                            '".$this->fk_id_admin."');";
    
    $save = $this->db()->query($query);
     if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;
    }
public function update(){
    $query="UPDATE articulo SET nombre='$this->nombre', descripcion='$this->descripcion where id_articulo='$this->id_articulo'";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
}
?>