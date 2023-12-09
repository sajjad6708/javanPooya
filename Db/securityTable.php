<?php
require "db.php" ; 
class security {
       private $DB='';

       function __construct(){
           $this->DB = new Db();
   
       }
   
              public function AddMeeting($name , $visited , $reason , $equipment ,$entry,$exit, $user , $date){
                     $result = $this->DB->InsertDB("INSERT INTO `meetings`(`fullName`, `entry`, `end`, `reason`, `visited`  ,`equipment` , `user` , `date`) VALUES
                                                                       ('".$name."','".$entry."', '".$exit."' , '".$reason."' , '".$visited."','".$equipment."' , '".$user."' , '".$date."')");
                     return $result;//return result of DB
                 }

                 public function selectMeeting($dateNow){
                    $meetings=array();
                    $result=$this->DB->SelectDB("SELECT * FROM `meetings` WHERE "."date= '$dateNow' ORDER BY id DESC ");
                    while($row=mysqli_fetch_assoc($result)){
                        $meetings[]=$row;
                    }
                    return $meetings;
                 }

                 public function allMeeting(){
                    $meetings=array();
                    $result=$this->DB->SelectDB("SELECT * FROM `meetings` ");
                    while($row=mysqli_fetch_assoc($result)){
                        $meetings[]=$row;
                    }
                    return $meetings;
                 }
      
}

?>