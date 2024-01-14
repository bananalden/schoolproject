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
        <h1> Administrator Login </h1>   
    </div>
    <form  action="backend/logcheck.php" method="post">  
    <div class="container">   
            <div class="user-details">
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" name="uname" required>
            </div>

            <div class="user-details">
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="pword" required>
            </div>  

            <button type="submit" name="submit">Login</button>
            <a href="../index.php">Click here for the Time-In form for Employees!</a>
        </div>   
    </form>  
</body>
</html>

