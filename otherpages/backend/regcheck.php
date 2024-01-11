<?php
if(isset($_POST["submit"])){
   $name = $_POST["fname"];
   $empID = $_POST["empID"];
   $department = $_POST["dept"];
   $position = $_POST["posit"];
   $empStatus = $_POST["status"];
   

   require_once 'database.php';
   require_once 'functioncheck.php';

   //Makes check for empty fields
   //if(emptyInputSignup($empID, $name, $dept, $position, $empStatus) !== false){
    //    header("Location: ../registration.php?error=emptyinput");
      //  exit();
  // }

   //Function that puts in user info into database
   createuser($conn, $empID, $name, $department, $position, $empStatus);

}

else {
    header("Location: ../registration.php");
}

?>
