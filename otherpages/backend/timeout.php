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
$curDate = date("Y-m-d");
$emptyTimein = databaseDateTimeInNull($conn, $empID);
$nullTimeExit = databaseDateTimeOutNull($conn, $empID);
$empIDCAPS = strtoupper($empID);
//strtotime($curdatetime);

if (empIDexists($conn, $empID) == false){
    //NONEXISTANT EMPID
    header("Location:/schoolproject/index.php?errorCode=2");
    exit();

}


else {
   if(empty($emptyTimein)){
    header('location:/schoolproject/index.php?errorCode=3');
   }

   else{
    header('location:/schoolproject/index.php?errorCode=5');
   }

   if($nullTimeExit == true){

if ($curDate > $usertimeoutDate){
        $sql = "UPDATE usertime SET timeExit = CURRENT_TIMESTAMP WHERE empID = '$empIDCAPS' AND DATE(timein) = CURRENT_DATE;";
        $result = mysqli_query($conn, $sql);
    
        if($result){
            header("Location:/schoolproject/index.php?errorCode=4");
            exit();
        }
        else{
            die(mysqli_error($conn));
        }
    }
    
else {
        header("Location:/schoolproject/index.php?errorCode=5");
        exit();
    }

}

}
?>