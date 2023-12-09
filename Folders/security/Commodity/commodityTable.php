<?php

require_once '../../../Db/db.php';
include "../../../DateAndTime/jdf.php";
$db = new Db();



if(isset($_POST['scommodity']) && $_POST['scommodity']==1)
{
  // $f1 = explode("-", $_POST['name']);
  // $fullName =  $f1[0] . " " .$f1[1]; 
  $date = str_replace('/', '-'  ,$_POST['date']) ; 

  // $s = explode("-", $_POST['sarshift']);
  // $sarshift =  $s[0] . " " .$s[1]; 

  $hour= $_POST['hour'] ; 
  $min= $_POST['min'] ; 
  
  $time = $hour . ":" . $min ; 
  // $exit = $hourExit . ":" . $minExit ; 
  $user = "سجاد دشتبان";
  
 
  $db ->InsertDB("INSERT INTO `commotidy`(`status`, `productName`, `count`,`unit`, `source`,`driver`,`pelakNumber`, `time`,  `description`,  `attachment`,  `user`,`date`) VALUES
                                                 ('".$_POST["entryExit"]."',
                                                 '".$_POST["comName"]."',
                                                 '".$_POST["count"]."',
                                                 '".$_POST["unit"]."',
                                                 '".$_POST["account"]."',
                                                 '".$_POST["driver"]."',
                                                 '".$_POST["pelak"]."',
                                                 '".$time."',
                                                 '".$_POST["description"]."',
                                                 '". $_FILES['attachment']['tmp_name']."',
                                                 '".$user."',
                                                 '".$date."' )");
       
         
       }

      //  ========================================  SEARCH REPORT PRODUCT        =======================================
       if(isset($_POST['issetProduct']) && $_POST['issetProduct'] == 1){
        // echo $_POST['DateP'] ;
       
        if($_POST['status']== 1)
        {
          if($_POST['ProductName'] != ' ')
          {
            $dateA = str_replace('/', '-'  ,$_POST['DateP']) ; 
            $dateB = str_replace('/', '-'  ,$_POST['DatePB']) ; 
            $pName = $_POST['ProductName'] ;
            $status = $_POST['status'] ;

            $Order = array() ; 
            $result = $db->SelectDB("SELECT * FROM `commotidy` WHERE ProductName LIKE '%$pName%' AND status ='$status' AND date BETWEEN '$dateA' AND '$dateB' ORDER BY id DESC  ");
            while($row = mysqli_fetch_row($result)){
              $Order[]= $row ;
            }
          
            echo json_encode($Order) ; 
  
          } 
          else
          {
            $dateA = str_replace('/', '-'  ,$_POST['DateP']) ; 
            $dateB = str_replace('/', '-'  ,$_POST['DatePB']) ; 
          
            $status = $_POST['status'] ;

            $Order = array() ; 
            $result = $db->SelectDB("SELECT * FROM `commotidy` WHERE status ='$status' AND date BETWEEN '$dateA' AND '$dateB' ORDER BY id DESC  ");
            while($row = mysqli_fetch_row($result)){
              $Order[]= $row ;
            }
          
            echo json_encode($Order) ; 
          }

        }
          elseif ($_POST['status'] == 0){
            if($_POST['ProductName'] != ' ')
            {
              $dateA = str_replace('/', '-'  ,$_POST['DateP']) ; 
              $dateB = str_replace('/', '-'  ,$_POST['DatePB']) ; 
              $pName = $_POST['ProductName'] ;
              $status = $_POST['status'] ;
  
              $Order = array() ; 
              $result = $db->SelectDB("SELECT * FROM `commotidy` WHERE ProductName LIKE '%$pName%' AND status ='$status' AND date BETWEEN '$dateA' AND '$dateB' ORDER BY id DESC  ");
              while($row = mysqli_fetch_row($result)){
                $Order[]= $row ;
              }
            
              echo json_encode($Order) ; 
    
            } 
            else
            {
              $dateA = str_replace('/', '-'  ,$_POST['DateP']) ; 
              $dateB = str_replace('/', '-'  ,$_POST['DatePB']) ; 
            
              $status = $_POST['status'] ;
  
              $Order = array() ; 
              $result = $db->SelectDB("SELECT * FROM `commotidy` WHERE status ='$status' AND date BETWEEN '$dateA' AND '$dateB' ORDER BY id DESC  ");
              while($row = mysqli_fetch_row($result)){
                $Order[]= $row ;
              }
            
              echo json_encode($Order) ; 
            }
          }
        }
