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




?>
