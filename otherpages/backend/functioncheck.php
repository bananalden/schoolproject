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

function createUser($conn, $name, $email, $username, $password){
    $sql = "INSERT INTO userlist (fullName, email, username, userPass) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("Location: ../registration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //NOTE TO PERSON WRITING THIS CODE: SEND REGISTRATION BACK TO ADMIN PAGE
    header("Location:../login.php");
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

  /*  function loginUser($conn, $username, $password){
        $usernameExists
    }
        */

?>
