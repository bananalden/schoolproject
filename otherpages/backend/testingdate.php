<?php 

require_once 'functioncheck.php';
include 'database.php';

$empID = "MA0001";
$date = checkTimein($conn, $empID);


echo $date;



?>