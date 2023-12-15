<?php

require 'database.php';
include 'functioncheck.php';
$getID = $_GET["updateID"];


if(isset($_POST["submit"])){

        $name = $_POST["fname"];
        $username = $_POST["usn"];
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $admincheck = $_POST["isAdmin"];
    
        $pwdHashed = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = "UPDATE userlist SET fullName = '$name', email = '$email', userPass= '$pwdHashed', admincheck = '$admincheck' WHERE userID = $getID;";
    
        $result = mysqli_query($conn, $sql);
    
        if($result){
            header("Location:../admin.php");
        }
        else{
            die(mysqli_error($conn));
        }
  
    
    

}



?>