<?php 

require_once 'functioncheck.php';
include 'database.php';

$empID = "MA0001";
$date = databaseDateTimeOutNull($conn, $empID);
$soemthing = databaseDateTimeInNull($conn, $empID);



echo $date;
echo $soemthing;



?>