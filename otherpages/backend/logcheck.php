<?php 

include_once 'database.php';

$username = $_POST["uname"];
$password = $_POST["pword"];


echo $username.$password;

//header('Location: ../login.php');


?>