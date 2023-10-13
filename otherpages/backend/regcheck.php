<?php
if(isset($_POST["submit"])){
   $name = $_POST["fname"];
   $email = $_POST["email"];
   $username = $_POST["usn"];
   $password = $_POST["pass"];

   require_once 'database.php';
   require_once 'functioncheck.php';

   //Makes check for empty fields
   if(emptyInputSignup($name, $email, $username, $password) !== false){
        header("Location: ../registration.php?error=emptyinput");
        exit();
   }
   //Makes checks for invalid email located in functioncheck.php
   if(invalidEmail($email) !== false){
        header("Location: ../registration.php?error=invalidemail");
        exit();
   }
   //Function that puts in user info into database
   createuser($conn, $name, $email, $username, $password);
}

else {
    header("Location: ../registration.php");
}

?>