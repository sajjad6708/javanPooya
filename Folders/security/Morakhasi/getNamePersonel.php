<?php
require_once '../../../Db/db.php';
include "../../../DateAndTime/jdf.php";
// require_once '../../Functions/Converts.php';
$db = new Db();
if (isset($_POST['getPosts']) && $_POST['getPosts'] == 1) {

  $post = $_POST['postValue'];


  $Order = array();
  $result = $db->SelectDB("SELECT  Name , Family FROM `personel` WHERE " . " `Post`= '".$post."' ");
  while ($row = mysqli_fetch_row($result)) {
    $Order[] = $row;
  }

 echo $nameAndNa = json_encode($Order) ; 
  
}



if (isset($_POST['pCode']) && $_POST['pCode'] == 1) {

  $fName= $_POST['firstName'];
   $lName = $_POST['lastName'] ;


  $Order = array();
  $result = $db->SelectDB("SELECT PersonalCode FROM `personel` WHERE " . " `Name`= '".$fName."' AND  `Family`= '".$lName."' ");
  while ($row = mysqli_fetch_row($result)) {
    $Order[] = $row;
  }

 echo json_encode($Order) ; 
  
}



if(isset($_POST['getSarshift']) && $_POST['getSarshift']==1){
  $Order = array() ; 
  $result = $db->SelectDB("SELECT  Name , Family  FROM `personel` WHERE "." Post ='sr'");
  while($row = mysqli_fetch_row($result)) {
    $Order[] = $row ; 
  
  }

  echo json_encode($Order) ; 
}



if(isset($_POST['sMorakhasi']) && $_POST['sMorakhasi']==1)
{
  $f1 = explode("-", $_POST['name']);
  $fullName =  $f1[0] . " " .$f1[1]; 
  $date = str_replace('/', '-'  ,$_POST['date']) ; 

  $s = explode("-", $_POST['sarshift']);
  $sarshift =  $s[0] . " " .$s[1]; 

  $hourEntry = $_POST['hourEntry'] ; 
  $minEntry = $_POST['minEntry'] ; 
  $hourExit = $_POST['hourExit'] ; 
  $minExit = $_POST['minExit'] ; 
  $entry = $hourEntry . ":" . $minEntry ; 
  $exit = $hourExit . ":" . $minExit ; 
  $user = "سجاد دشتبان";
  
 
  $db ->InsertDB("INSERT INTO `vacation`(`fullName`, `personelCode`, `post`,`shift`, `sarshift`,`entry`,`end`, `user`, `date`) VALUES
                                                 ('".$fullName."',
                                                 '".$_POST["personelCode"]."',
                                                 '".$_POST["post"]."',
                                                 '".$_POST["shift"]."',
                                                 '".$_POST["sarshift"]."',
                                                 '".$entry."',
                                                 '".$exit."',
                                                 '".$user."',
                                                 '".$date."' )");
       
         
       }

      //  ========================================   show list Morakhasi Personel For Edit           =======================================
       
if(isset($_POST['editMo']) && $_POST['editMo']== 1){
  $jdate =  jdate('Y/n/j');
  $date = str_replace('/' , '-' , $jdate) ;
  // $dateNow = $_POST['date'] ;
    $Order = array() ;
    $result = $db->SelectDB("SELECT * FROM `vacation` WHERE  "."date= '$date' ORDER BY id DESC ") ; 
    while($row = mysqli_fetch_row($result)){
      $Order[]= $row ;
    }
      echo json_encode($Order) ; 
   
  //  var_dump( $Order );

}



      //  ========================================  SEARCH        =======================================
      if(isset($_POST['searchBox'])){

        if($_POST['selectSearch']=== 'personelCode'){
          $personelCode = $_POST['searchBox'] ; 
          $Order = array() ; 
          $result = $db->SelectDB("SELECT * FROM `vacation` WHERE  "."personelCode= '$personelCode' ORDER BY id DESC  ");
          while($row = mysqli_fetch_row($result)){
            $Order[]= $row ;
          }
         
          echo json_encode($Order) ; 

        } 
        else if($_POST['selectSearch']  === 'family') {
          $family = $_POST['searchBox'] ;
          $Order = array() ; 
          $result = $db->SelectDB("SELECT * FROM `vacation` WHERE  "."fullName LIKE '%$family%'  ");
          while($row = mysqli_fetch_row($result)){
            $Order[]= $row ;
          }
         
          echo json_encode($Order) ; 

        }
      
      };
                                      //  selsect for show in form edit 

      if(isset($_POST['userId'])){

        
          $userid = $_POST['userId'] ;
          $Order = array() ; 
          $result = $db->SelectDB("SELECT * FROM `vacation` WHERE  "."id ='$userid' ");
          while($row = mysqli_fetch_row($result)){
            $Order[]= $row ;
        
        }
        echo json_encode($Order) ; 

     
      };


      // =========================================================  UPDATE morakhasi ==================================
      if(isset($_POST['eMorakhasi']) && $_POST['eMorakhasi']==1)
      {
    
        $result = $db->EditDB( "UPDATE `vacation` SET `fullName`='".$_POST['name']."' ,  `post` = '".$_POST["post"]."',
            `shift` = '".$_POST["shift"]."',
            `sarshift` = '".$_POST["sarshift"]."',
            `entry` = '".$_POST["EntryEdit"]."',
            `end`= '".$_POST['ExitEdit']."',
            `date` = '".$_POST['date']."' WHERE ID= '".$_POST['userId']."' ");   
      }

      // ================================================= delete =========================
      if(isset($_POST['deleteMo']) && $_POST['deleteMo']==1)
      {
        $result = $db->DeleteDB( "DELETE FROM `vacation` WHERE ID= '".$_POST['userId']."' ");   
      }

      //======================================     Reports Morakhasi Personel =======================================
      if(isset($_POST['searchBoxReport'])){

        if($_POST['selectSearchReport']=== 'personelCode'){
          $personelCode = $_POST['searchBoxReport'] ; 
          $dateA = str_replace('/' , '-' , $_POST['dateA']) ;
          $dateB =  str_replace('/' , '-' , $_POST['dateB']) ; 
        
          $Order = array() ; 
          $result = $db->SelectDB("SELECT * FROM `vacation` WHERE personelCode= '$personelCode' AND date BETWEEN '$dateA' AND '$dateB' ORDER BY id DESC  ");
          while($row = mysqli_fetch_row($result)){
            $Order[]= $row ;
          }
        
          echo json_encode($Order) ; 

        } 
        else if($_POST['selectSearchReport']=== 'family'){
          $personelFamily = $_POST['searchBoxReport'] ; 
          $dateA = str_replace('/' , '-' , $_POST['dateA']) ;
          $dateB =  str_replace('/' , '-' , $_POST['dateB']) ; 
        
          $Order = array() ; 
          $result = $db->SelectDB("SELECT * FROM `vacation` WHERE fullName LIKE '%$personelFamily%' AND date BETWEEN '$dateA' AND '$dateB' ORDER BY id DESC  ");
          while($row = mysqli_fetch_row($result)){
            $Order[]= $row ;
          }
        
          echo json_encode($Order) ; 

        } 
      
      };
      

?>
