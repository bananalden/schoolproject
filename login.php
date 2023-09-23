<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <form id="login" action="login.php" method="post">
        <div class="username">
            <label>USERNAME:</label><br>
            <input type="text" name="usn"><br>
        </div>

        <div class="password">
            <label>PASSWORD:</label><br>
            <input type="password" name="pswd"><br>
        </div>
        <button class="btn" type="submit" value="log in">LOG IN</button>
    </form>
</body>
</html>

<?php 
session_start();
include_once 'database.php';



?>