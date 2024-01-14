<?php 

require_once 'functioncheck.php';
include 'database.php';

$empID = "MA0001";
$existingID = matchEmpID($conn, $empID);


echo $existingID;




?>