<?php
 $db_server = "localhost:3307";
 $db_user = "root";
 $db_pass = "";
 $db_name = "employee_forum";
 


 $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

 if(!$conn) {
    die("Connection Failed: ". mysqli_connect_error());
 }

?>