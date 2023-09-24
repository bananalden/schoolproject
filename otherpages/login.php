<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="../css/main.css">

</head>
<body>
    <form action="login.php">
        <div class="container-1">
            <label class="uname" for="uname">Username:</label><br>
            <input id="username" type="text" placeholder="Enter Your Username" name="uname">
        </div>

        <div class="container-2">
            <label class="password" for="psword">Password:</label><br>
            <input id="psw" type="text" placeholder="Enter Your Password" name="uname">
        </div>

        <label class="check">
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>

        <button id="btn" type="submit">login</button>
    </form>
</body>
</html>

<?php 
session_start();
include_once 'backend/database.php';



?>