<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>USERNAME:</label><br>
        <input type="text" name="usn"><br>
        <label>PASSWORD:</label><br>
        <input type="password" name="pswd"><br>
        <button type="submit" value="log in">LOG IN</button>
    </form>
</body>
</html>

<?php 
session_start();
include_once 'database.php';



?>