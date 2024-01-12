<?php 

//Makes a check for empty fields
function emptyInputSignup($empID, $name, $dept, $position, $empStatus){
    
    $result;

    if(empty($name) || empty($empID) || empty($dept) || empty($position) || empty($empStatus)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

//Makes a check for invalid email form
function invalidEmail($email){
    $result;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    
    else{
        $result = false;
    }

    return $result;
}

function createUser($conn, $empID, $fullName, $dept, $position, $empStatus){
    $sql = "INSERT INTO userlist (empID, fullName, dept, position, empStatus) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "sssss", $empID, $fullName, $dept, $position, $empStatus);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //NOTE TO PERSON WRITING THIS CODE: SEND REGISTRATION BACK TO ADMIN PAGE
    header("Location:../admin.php?error=none");
    exit();

    }

    //CHECKS FOR EMPTY LOGIN INPUTS
    function emptyInputLogin($username, $password){
    
        $result;
    
        if(empty($username) || empty($password)){
            $result = true;
        }
        else{
            $result = false;
        }
    
        return $result;
    }

//CHECKS IF USERNAME EXISTS
    function userExists($conn, $username, $email){
        $sql = "SELECT * FROM userlist WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../registration.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);

    }

    //USER LOGIN
    function loginUser($conn, $username, $password){

        $usernameExists = userExists($conn, $username, $username);

        if ($usernameExists === false){
            header("Location: ../login.php?error=wronglogin");
            exit();
        }

        $pwdHashed = $usernameExists["userPass"];
        $pwdCheck = password_verify($password, $pwdHashed);

        if ($pwdCheck === false){
            header("Location: ../login.php?error=wronglogin");
            exit(); 
        }
        
        else if ($pwdCheck === true){
            $sql = "SELECT * FROM userlist WHERE username = ?;";
            $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: ../registration.php?error=stmtfailed");
                    exit();
                    }

                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
        
            $resultData = mysqli_stmt_get_result($stmt);
            $checkAdmin = mysqli_fetch_assoc($resultData);

            $isAdmin = $checkAdmin["admincheck"];
            $fullname = $checkAdmin["fullName"];
            mysqli_stmt_close($stmt);
        //THIS IS IF THE LOGIN DETECTS IF YOU ARE NOT ADMIN
        if ($isAdmin == "admin"){
            //i literally have no idea why i have to declare the fact that the session has
            //started twice someone help me on this
            session_start();
            $_SESSION["userId"] = $usernameExists["userID"];
            $_SESSION["admincheck"] = $isAdmin;
            $_SESSION["fullName"] = $fullname;
            $_SESSION["isloggedin"] = true;
            header("location:../admin.php");

        }

        else{
            session_start();
            $_SESSION["userId"] = $usernameExists["userID"];
            header("location:/schoolproject/error.html");

        }
       
            exit();

        }
    }


    //FUNCTION FOR UPDATING USERS
function updateUser($conn, $name, $email, $username, $password, $adminpriv, $userID){
        $sql = "UPDATE userlist SET fullName = ?, email = ?, username = ?, userPass = ?, admincheck = ? WHERE userID = ?;";
        $stmt = mysqli_stmt_init($conn);
    
        if(!mysqli_stmt_prepare($stmt, $sql)){
    
            header("Location: ../registration.php?error=stmtfailed");
            exit();
        }
    
        $pwdHashed = password_hash($password, PASSWORD_DEFAULT);
    
        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $pwdHashed, $adminpriv, $userID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
       
        header("Location:../admin.php?error=none");
        exit();
    
        }
    

//renames them properly
function renameDep($dept){
    $result;

    switch($dept){
        
        case "ITdept":
            $result = "IT Department";
            return $result;
            break;
        
        case "accountDept":
            $result = "Accounting Department";
            return $result;
            break;

        case "humResource":
            $result = "Human Resources";
            return $result;
            break;

        case "markDept":
            $result = "Marketing Department";
            return $result;
            break;

    }


}

function renamePos($pos){
    $result;
    switch($pos){
        
        case "deptHead":
            $result = "Department Head";
            return $result;
            break;
        
        case "teamLead":
            $result = "Team Lead";
            return $result;
            break;

        case "srStaff":
            $result = "Senior Staff";
            return $result;
            break;

        case "jrStaff":
            $result = "Junior Staff";
            return $result;
            break;

    }


}

function renameStat($empStatus){
    $result;
    switch($empStatus){
        
        case "fulltime":
            $result = "Full Time";
            return $result;
            break;
        
        case "parttime":
            $result = "Part Time";
            return $result;
            break;


    }


}


function grabName($conn, $empID){
    $sql = "SELECT fullName FROM userlist WHERE empID = ?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

   
   


    mysqli_stmt_bind_param($stmt, "s", $empID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $getName = mysqli_fetch_assoc($resultData);
    $fullName = $getName["fullName"];
    mysqli_stmt_close($stmt);
   
    
    return $fullName;
 
}

function grabDept($conn, $empID){
    $sql = "SELECT dept FROM userlist WHERE empID = ?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

   
   


    mysqli_stmt_bind_param($stmt, "s", $empID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $getDept = mysqli_fetch_assoc($resultData);
    $dept = $getDept["dept"];
    mysqli_stmt_close($stmt);
   
    
    return $dept;
    exit();
 
}

//checks if the table is empty first before inputting
function checkTimein($conn, $empID){
    $sql = "SELECT empID, timein FROM usertime WHERE empID = ?";
    $stmt = mysqli_stmt_init($conn);
    
    $result;

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $empID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $getTime = mysqli_fetch_assoc($resultData);
    $empRow = $getTime["empID"];
    mysqli_stmt_close($stmt);
    
    if($empRow){
        $result = true;
        //Return this if table has values
        return $result;
    }

    else{
        $result = false;
        //Return if table has no values
        return $result;
    }

}
    
function databaseDateIn($conn, $empID){
    $sql = "SELECT timein FROM usertime WHERE empID = ?";
    $stmt = mysqli_stmt_init($conn);
 

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $empID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $getTimein = mysqli_fetch_assoc($resultData);
    $timeInresult = $getTimein["timein"];
    $datetimeToDate = date("Y-m-d", strtotime($timeInresult));
    mysqli_stmt_close($stmt);
   

    return $datetimeToDate;

}

function databaseDateOut($conn, $empID){
    $sql = "SELECT timeout FROM usertime WHERE empID = ?";
    $stmt = mysqli_stmt_init($conn);
 

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $empID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $getTimein = mysqli_fetch_assoc($resultData);
    $timeInresult = $getTimein["timein"];
    $datetimeToDate = date("Y-m-d", strtotime($timeInresult));
    mysqli_stmt_close($stmt);
   

    return $datetimeToDate;

}

function empIDexists($conn, $empID){
    $sql = "SELECT * FROM userlist WHERE empID = ?";
    $stmt = mysqli_stmt_init($conn);
 

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $empID);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}

?>
