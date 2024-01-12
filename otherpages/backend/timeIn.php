<?php 
require_once 'functioncheck.php';
require_once 'database.php';

$empID = $_POST["empID"];
$checkTimein = checkTimein($conn, $empID);
$name = grabName($conn, $empID);
$dept = grabDept($conn, $empID);
$curdatetime = date("Y-m-d H:i:s");
$usertimeinDate = databaseDateIn($conn, $empID);
$tomorrow = strtotime("next Friday");
$tomorrowagain = date("Y-m-d", $tomorrow);
$curDate = date("Y-m-d", strtotime($curdatetime));
//strtotime($curdatetime);

if (empIDexists($conn, $empID) == false){
    //NONEXISTANT EMPID
    header("Location:/schoolproject/index.php?errorCode=2");
    exit();

}

else{
    if (empty($usertimeinDate) || empty($checkTimein)){

        $sql = "INSERT INTO usertime (empID, fullName, dept, timein) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
        
            header("Location: ../registration.php?error=stmtfailed");
            exit();
        }
        
        
        mysqli_stmt_bind_param($stmt, "ssss", $empID, $name, $dept, $curdatetime);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        //THIS CODE IS FOR TIMEIN
        header("Location:/schoolproject/index.php?errorCode=0");
        exit();
    
}

else{
    if($curDate > $usertimeinDate){
        $sql = "INSERT INTO usertime (empID, fullName, dept, timein) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
        
            header("Location: ../registration.php?error=stmtfailed");
            exit();
        }
        
        
        mysqli_stmt_bind_param($stmt, "ssss", $empID, $name, $dept, $curdatetime);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        //SUCCESFUL TIMEIN
        header("Location:/schoolproject/index.php?errorCode=0");
        exit();
        
    }
    else{
        //CURRENTLY TIMED IN FOR THE DAY
        header("Location:/schoolproject/index.php?errorCode=1");
        exit();  
    }


}
}



?>