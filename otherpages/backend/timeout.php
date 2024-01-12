<?php require_once 'functioncheck.php';
require_once 'database.php';
date_default_timezone_set('Asia/Singapore');
//$_POST["empID"];
$empID = $_POST["empID"];
$checkTimein = checkTimein($conn, $empID);
$name = grabName($conn, $empID);
$dept = grabDept($conn, $empID);
$curdatetime = date("Y-m-d H:i:s");
$usertimeoutDate = databaseDateOut($conn, $empID);
$curDate = date("Y-m-d", strtotime($curdatetime));
$emptyTimein = databaseDateTimeInNull($conn, $empID);
$nullTimeExit = databaseDateTimeOutNull($conn, $empID);
//strtotime($curdatetime);

if (empIDexists($conn, $empID) == false){
    //NONEXISTANT EMPID
    header("Location:/schoolproject/index.php?errorCode=2");
    exit();

}


else {
   if($emptyTimein == true){
    header('location:/schoolproject/index.php?errorCode=1');
   }

   else{

   }

   if($nullTimeExit == true){
    $sql = "UPDATE usertime SET timeExit = CURRENT_TIMESTAMP WHERE empID = '$empID' AND DATE(timein) = CURRENT_DATE;";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location:/schoolproject/index.php?errorCode=0");
        exit();
    }
    else{
        die(mysqli_error($conn));
    }
}
}


?>