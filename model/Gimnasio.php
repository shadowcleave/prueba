<?php

class Gimnasio extends EntidadBase{

      private $id_gimnasio;
      private $nombre;
      private $direccion;
      private $telefono;
      private $precioinscr;
      private $preciomens;
      private $horarios;
      private $fk_id_admin;

      public function __construct($adapter) {
        $table = "gimnasio";
        parent::__construct($table, $adapter);
    }
      
      
      function getId_gimnasio() {
          return $this->id_gimnasio;
      }

      function getNombre() {
          return $this->nombre;
      }

      function getDireccion() {
          return $this->direccion;
      }

      function getTelefono() {
          return $this->telefono;
      }

      function getPrecioinscr() {
          return $this->precioinscr;
      }

      function getPreciomens() {
          return $this->preciomens;
      }

      function getHorarios() {
          return $this->horarios;
      }

      function getFk_id_admin() {
          return $this->fk_id_admin;
      }

      function setId_gimnasio($id_gimnasio) {
          $this->id_gimnasio = $id_gimnasio;
          return $this;
      }

      function setNombre($nombre) {
          $this->nombre = $nombre;
          return $this;
      }

      function setDireccion($direccion) {
          $this->direccion = $direccion;
          return $this;
      }

      function setTelefono($telefono) {
          $this->telefono = $telefono;
          return $this;
      }

      function setPrecioinscr($precioinscr) {
          $this->precioinscr = $precioinscr;
          return $this;
      }

      function setPreciomens($preciomens) {
          $this->preciomens = $preciomens;
          return $this;
      }

      function setHorarios($horarios) {
          $this->horarios = $horarios;
          return $this;
      }

      function setFk_id_admin($fk_id_admin) {
          $this->fk_id_admin = $fk_id_admin;
          return $this;
      }

      public function save(){
          $query="INSERT INTO gimnasio(id_gimnasio, nombre,direccion,telefono,precioinscr,preciomens,horarios,fk_id_admin) 
            VALUES ('".$this->id_gimnasio."',
            '".$this->nombre."',
                    '".$this->direccion."',
                    '".$this->telefono."',
                  '".$this->precioinscr."',
                  '".$this->preciomens."',
                  '".$this->horarios."',
                  '".$this->fk_id_admin."');";
          
    $save = $this->db()->query($query);
       $newId=  $this->db()->insert_id;
       if(!$save && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
    return $save;
}
    public function update(){
       $query="UPDATE gimnasio set direccion='$this->direccion',telefono='$this->telefono',nombre='$this->nombre', fk_id_admin='$this->fk_id_admin' where id_gimnasio='$this->id_gimnasio'";
       $update = $this->db()->query($query);
        if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }    
               return $update;


}
}
?>