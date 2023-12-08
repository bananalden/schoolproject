<?php 
    session_start();
    $userID = $_SESSION["userId"];
    $adminuser = $_SESSION["admincheck"];
    $fullname = $_SESSION["fullName"];
    $loggedin = $_SESSION["isloggedin"];

    

      if (isset($loggedin)){
            if ($adminuser != "admin"){
                header("location:/schoolproject/error.html");
            }
            else{
                header("location:../otherpages/admin.php");
            }
      }
      



?>