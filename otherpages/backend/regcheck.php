<?php
   require_once 'database.php';
   require_once 'functioncheck.php';
if(isset($_POST["submit"])){
   $name = $_POST["fname"];
   $empID = $_POST["empID"];
   $department = $_POST["dept"];
   $position = $_POST["posit"];
   $empStatus = $_POST["status"];
   $existingID = matchEmpID($conn, $empID);


    if($empID == $existingID){
        header("Location:../registration.php?errorCode=1");
        exit();
    }

    else{
        createUser($conn, $empID, $name, $department, $position, $empStatus);
        header("Location:../registration.php?errorCode=0");
        exit();
        
    }

}
?>
