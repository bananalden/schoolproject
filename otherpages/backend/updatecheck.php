<?php

require 'database.php';
include 'functioncheck.php';
$getID = $_GET["updateID"];


if(isset($_POST["submit"])){

    $name = $_POST["fname"];
    $empID = $_POST["empID"];
    $department = $_POST["dept"];
    $position = $_POST["posit"];
    $empStatus = $_POST["status"];
    
        
    
        $sql = "UPDATE userlist SET empID = '$empID', fullName = '$name', dept= '$department', position = '$position', empStatus = '$empStatus' WHERE empID = '$getID';";
    
        $result = mysqli_query($conn, $sql);
    
        if($result){
            header("Location:../admin.php");
        }
        else{
            die(mysqli_error($conn));
        }
  
    
    

}



?>