<?php

require_once 'db.php';
class User{
    private $DB='';

    function __construct(){
        $this->DB = new Db();

    }
    public function GetUser(){
        $persons=array();
        $result=$this->DB->SelectDB('SELECT * FROM `users`');
        while($row=mysqli_fetch_row($result)){
            $persons[]=$row;
        }
        return $persons;
    }

    public function CheckUser($UserName , $password){
        $result=$this->DB->SelectDB("SELECT * FROM `users` where UserName = '$UserName' AND PassWord = '$password'");
        
        while ($row = $row=mysqli_fetch_array($result)) {
            if ( $row['PassWord'] == $password && $row['PassWord']== $password) {
                $users[]=$row;
          
                return $users;
            }
              
              else
              {
                return false;
              }
         }

}

    public function AddPersons($user , $pass , $role,$name,$family){
        $result = $this->DB->InsertDB("INSERT INTO `users`(`UserName`, `PassWord`, `Role`, `Name`, `Family`) VALUES
                                                          ('".$user."','".$pass."','".$role."','".$name."','".$family."')");
        return $result;//return result of DB
    }
}

?>