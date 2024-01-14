<?php 

if(isset($_POST["submit"])){
    $username = $_POST["uname"];
    $password = $_POST["pword"];
    $adAuth = "admin";

    require_once 'database.php';
    require_once 'functioncheck.php';

    if (emptyInputLogin($username, $password) !== false){
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    else{
        if($username == $adAuth && $password == $adAuth){
            session_start();
            $_SESSION["username"] = $username;
            header("Location: ../admin.php");
            exit();
        }
        else{
            header("Location: ../login.php?error=wrongcredentials");
            exit();  
        }

    }

}

else{
    header("Location: ../login.php");
}

?>