<?php 
    session_start();
      if (empty($_SESSION["username"])){
            session_destroy();
            header("location:../otherpages/login.php");
      }


?>