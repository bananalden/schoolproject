<?php
   require_once 'database.php';
   require_once 'functioncheck.php';
if(isset($_POST["submit"])){
   $name = $_POST["fname"];
   $empID = $_POST["empID"];
   $department = $_POST["dept"];
   $position = $_POST["posit"];
   $empStatus = $_POST["status"];
   $empIDCAPS = strtoupper($empID);

   try {
    createUser($conn, $empIDCAPS, $name, $department, $position, $empStatus);
    header("Location:../registration.php?errorCode=0");
    exit();

} catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1062) { // 1062 is the MySQL error code for duplicate entry
        header("Location:../registration.php?errorCode=1");
        exit();
    } else {
        // Handle other database-related errors
        echo "Database error: " . $e->getMessage();
    }
}

        
 
    
       
        
    

}
?>
