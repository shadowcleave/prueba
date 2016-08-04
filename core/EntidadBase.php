<?php

class EntidadBase{
    private $table; 
    private $db; 
    private $conectar;
    
    public function __construct($table, $adapter){
        $this->table=(string) $table;
      /*  
        require_once'Conectar.php';
        $this->conectar=new conectar();
        $this->db=$this->conectar->conexion();
      */  
        $this->conectar = null;
        $this->db = $adapter;
    }
    public function getconectar(){
        return $this->conectar;
    }
    public function db(){
       return $this->db;
   }
   public function getAll(){
       $query = $this->db->query("SELECT * FROM $this->table");
       $resultSet=null;
       while ($row=$query->fetch_object()){
           
           $resultSet[]=$row;
           
       }
       return $resultSet;
   }
   public function getById($id,$primaryKey){
       $query=$this->db->query("SELECT * FROM $this->table WHERE ". $primaryKey. "=" .$id);
       $resultSet=null;
       if($row=$query->fetch_object()){
          $resultSet=$row;
      }

      return $resultSet;

    }

      public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $colunm='$value'");
        while ($row =$query->fetch_object()){
          $resultSet[]=$row;
        }
        return $resultSet;
      }

      
  
  public function deleteById($primaryKey,$id) {
      $codigoError=0;
      
    $query = $this->db->query("DELETE FROM $this->table WHERE " . $primaryKey . "=" . $id);
    
    if(!$query){
        $codigoError = $this->db()->errno;
    }
    return $codigoError;
}

public function deleteBy($column, $value) {
    $query = $this->db->query("DELETE FROM $this->table WHERE $column='$value'");
    return $query;
}
}

