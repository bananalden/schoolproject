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
    $sql = "INSERT INTO userlist (fullName, email, username, userPass) VALUES ($name, $email, $username, $password)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_init($stmt, $sql)){
        header("Location: ../registration/php");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php");
    exit();

    }




?>
