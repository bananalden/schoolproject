<?php 
    session_start();
    $userID = $_SESSION["userId"];
    $adminuser = $_SESSION["admincheck"];
    $fullname = $_SESSION["fullName"];
    $loggedin = $_SESSION["isloggedin"];

    

      if (empty($loggedin)){
            session_destroy();
            header("location:../index.php");
      }

      if($adminuser != "admin"){
            session_destroy();
            header("location:login.php");
      }

?>