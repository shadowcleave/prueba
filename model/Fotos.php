<?php

class Fotos extends EntidadBase{
    
    private $id_foto;
    private $ruta_foto;
    private $fk_id_gimnasio;
    
    public function __construct($adapter) {
        $table = "fotos";
        parent::__construct($table, $adapter);
    }
    
    function getId_foto() {
        return $this->id_foto;
    }

    function getRuta_foto() {
        return $this->ruta_foto;
    }

    function getFk_id_gimnasio() {
        return $this->fk_id_gimnasio;
    }

    function setId_foto($id_foto) {
        $this->id_foto = $id_foto;
        return $this;
    }

    function setRuta_foto($ruta_foto) {
        $this->ruta_foto = $ruta_foto;
        return $this;
    }

    function setFk_id_gimnasio($fk_id_gimnasio) {
        $this->fk_id_gimnasio = $fk_id_gimnasio;
        return $this;
    }
    
    public function save(){$query="INSERT INTO fotos(ruta_foto,fk_id_gimnasio) 
            VALUES ('".$this->ruta_foto."',
                    '".$this->fk_id_gimnasio."');";
                                //'".$this->estado."');";
                         
    $save = $this->db()->query($query);
    $newId=  $this->db()->insert_id;
     if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;
}
public function update(){
    $query="UPDATE fotos SET ruta_foto='$this->ruta_foto' where id_foto='$this->id_foto'";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
}
