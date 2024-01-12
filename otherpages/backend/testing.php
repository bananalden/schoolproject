<?php 
require_once 'functioncheck.php';
require_once 'database.php';

$empID = "MA0001";

$name = grabName($conn, $empID);
$dept = grabDept($conn, $empID);

echo $name . "<br>";
echo $dept;




?>