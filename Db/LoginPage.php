<?php
session_start();
include "UserTable.php";


$result =new User();
function redirect($url)
{
    if (!headers_sent()) {
        header("Location: $url");
    } else {
        echo "<script type='text/javascript'>window.location.href='$url'</script>";
        echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
    }
    exit; 
}




    if (isset($_POST['sub'])) {
            $PassWord = ($_POST['pass']);
            $UserName = $_POST['user'];
        
          $check = $result->CheckUser($UserName, $PassWord);
          if(!empty($check) ){
                foreach($check as $cheekOk){
                        $_SESSION['userName'] = $UserName;
                        $_SESSION["name"] = $cheekOk['Family'];
                        $_SESSION['success-login'] = 1;
                        $_SESSION['post'] = $cheekOk['post'];
                       
                        header('location:../home/home.php');
                } }
          else
          {
            $_SESSION['error-login'] = 1;
            header("Location:../index.php");
            return false;
          }
    }
    








