<?php
if(isset($_POST["submit"])){
   $name = $_POST["fname"];
   $email = $_POST["email"];
   $username = $_POST["usn"];
   $password = $_POST["pass"];

   require_once 'database.php';
   require_once 'functioncheck.php';

   if(emptyInputSignup($name, $email, $username, $password) !== false){
        header("Location: ../registration.php?error=emptyinput");
        exit();
   }

   if(invalidEmail($email) !== false){
        header("Location: ../registration.php?error=invalidemail");
        exit();
   }
}

else {
    header("Location: ../registration.php");
}

?>