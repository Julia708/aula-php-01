<?php
 
class DB {
     private $HOST = 'localhost';
     private $HOST = 'mysql';
     private $USER = 'tads24_mendes';
     private $PASSWORD = 'tads24_mendes';
     private $DB = "aula01";
     private $DB = "aula_db";
     private $PORT = 3306;
     private $CHARSET = "utf8mb4";
     private $conn;
 
     public function getConnection() {
         $this->conn = new PDO("mysql:host=$this->HOST;dbname=$this->DB;charset=$this->CHARSET;port=$this->PORT", $this->USER, $this->PASSWORD);
         return $this->conn;
     }
    
}
     
 
 
 ?>