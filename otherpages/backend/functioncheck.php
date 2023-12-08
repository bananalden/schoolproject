<?php 

//Makes a check for empty fields
function emptyInputSignup($name,$email, $username, $password){
    
    $result;

    if(empty($name) || empty($email) || empty($username) || empty($password)){
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

function createUser($conn, $name, $email, $username, $password, $adminpriv){
    $sql = "INSERT INTO userlist (fullName, email, username, userPass, admincheck) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

    $pwdHashed = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $pwdHashed, $adminpriv);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //NOTE TO PERSON WRITING THIS CODE: SEND REGISTRATION BACK TO ADMIN PAGE
    header("Location:../registration.php?error=none");
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
        //NOTE TO PROGRAMMER: ADD AN SQL QUERY THAT CHECKS ON THE LEVEL OF PRIVILEGE
        //OF USER LOGGING IN IN THIS SECTION HERE
        else if ($pwdCheck === true){
            //RESEARCH HOW TO SEARCH FOR STATEMENT TO CHECK FOR IDs
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
        mysqli_stmt_close($stmt);
        //THIS IS IF THE LOGIN DETECTS IF YOU ARE NOT ADMIN
        if ($isAdmin == "admin"){
            session_start();
            $_SESSION["userId"] = $usernameExists["userID"];
            $_SESSION["admincheck"] = $isAdmin;
            header("location:../admin.php");

        }

        else{
            session_start();
            $_SESSION["userId"] = $usernameExists["userID"];
            header("location:/schoolProject/schoolproject/error.html");

        }
            
           
            exit();

             /*session_start();
            $_SESSION["userId"] = $usernameExists["userID"];
            header("location:/school/schoolproject/loginsuccesfultest.html");*/
        }
    }

    
    //OTHER NOTE TO PROGRAMMER: MODIFY THE CODE SO THAT IT SOMEHOW MAKES TWO SQL QUERIES:
    //ONE FOR THE MASTER USER LIST AND THE USERLIST THAT DICTATES THE PRIVILEGE LEVEL
?>
