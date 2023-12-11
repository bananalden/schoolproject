<?php

//require 'backend/loginauthentication.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">

</head>
<body>
    <div class="title">
        <h1> Employee Login Form </h1>   
    </div>
    <form>  
    <div class="container">   
            <div class="user-details">
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" name="username" required>
            </div>

            <div class="user-details">
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>  

            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked" class="remember"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
        </div>   
    </form>  
</body>
</html>

<?php
if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Some fields are empty, please fill!</p>";
        }

        else if ($_GET["error"] == "wronglogin"){
            echo "<p>Username/Email or password is wrong, please try again</p>";
        }

    }
    ?>