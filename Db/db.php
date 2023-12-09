<?php
class Db{
     private $servername='localhost';
       private $dbname='javanPooya_kashan';
       private $user='root';
       private $pass='';
       private $conn='';
      

       function __construct(){
           $this->conn = new mysqli($this->servername ,$this->user , $this->pass ,$this->dbname );
          $this->conn->set_charset("utf8");
   
   
       }
       public function SelectDB($sql){
           $result=$this->conn->query($sql);
           return $result;
   
       }
       public function InsertDB( $sql){
           $result = $this->conn->query($sql);
           return $result;//return result of DB
       }
       public function EditDB( $sql){
           $result = $this->conn->query($sql);
           return $result;//return result of DB
       }
       public function DeleteDB( $sql){
           $result = $this->conn->query($sql);
           return $result;//return result of DB
       }
   }



   