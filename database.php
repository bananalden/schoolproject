<?php


try
{
    $database = new PDO('mysql:host=localhost; dbname=employee-forum', 'root','');
    echo "Connected to database";
}

catch(PDOException)
{
    echo "Database is off";
}


?>