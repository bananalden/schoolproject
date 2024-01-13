<?php
if(isset($_POST["submit"])){
   $name = $_POST["fname"];
   $empID = $_POST["empID"];
   $department = $_POST["dept"];
   $position = $_POST["posit"];
   $empStatus = $_POST["status"];
   

   require_once 'database.php';
   require_once 'functioncheck.php';

   if (matchEmpID($conn, $empID) == false){
    createuser($conn, $empID, $name, $department, $position, $empStatus);
    header("Location.../registration.php?errorCode=0");
    exit();
}

   //Function that puts in user info into database
   

}

else {
    header("Location: ../registration.php?errorCode=1");
}

?>
