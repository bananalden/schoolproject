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
    

?>
