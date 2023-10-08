<?php
if(isset($_POST["submit"])){

    $name = $_POST["fname"];
    $email = $_POST["email"];
    $username = $_POST["usn"];
    $password = $_POST["pass"];

}

else {
    header("Location: ../registration.php");
}

?>