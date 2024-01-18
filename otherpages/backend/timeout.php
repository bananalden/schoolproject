<?php require_once 'functioncheck.php';
require_once 'database.php';
date_default_timezone_set('Asia/Singapore');
//$_POST["empID"];
$empID = $_POST["empID"];
$checkTimein = checkTimein($conn, $empID);
$curdatetime = date("Y-m-d H:i:s");
$curDate = date("Y-m-d");
$empIDCAPS = strtoupper($empID);
$dateOutexists = grabDateoutvalue($conn, $empIDCAPS);
//strtotime($curdatetime);

if (empIDexists($conn, $empID) == false){
    //NONEXISTANT EMPID
    header("Location:/schoolproject/index.php?errorCode=2");
    exit();
}

else{

    if ($checkTimein == true){
        header("Location:/schoolproject/index.php?errorCode=3");
    }

    else{
        if(empty($dateOutexists)){
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

        else{
            header("Location:/schoolproject/index.php?errorCode=5"); 
        }
    }

}

?>