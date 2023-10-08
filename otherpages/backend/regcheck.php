<?php
if(isset($_POST["submit"])){

    $name = $_POST["fname"];
    $email = $_POST["email"];
    $username = $_POST["usn"];
    $password = $_POST["pass"];

    require_once 'database.php';
    require_once 'functioncheck.php';

    if(emptyInputSignup($name,$email, $username, $password) !== false) {
        header("Location: ../registration.php");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("Location: ../registration.php");
        exit();
    }

    createUser($conn,$name,$email,$username,$password);
}

else {
    header("Location: ../registration.php");
}

?>