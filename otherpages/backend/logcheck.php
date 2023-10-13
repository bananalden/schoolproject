<?php 

if(isset($_POST["submit"])){
    $username = $_POST["uname"];
    $password = $_POST["pword"];

    require_once 'database.php';
    require_once 'functioncheck.php';

    if (emptyInputLogin($username, $password) !== false){
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);

}

else{
    header("Location: ../login.php");
}

?>