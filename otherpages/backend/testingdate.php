<?php 

require_once 'functioncheck.php';
include 'database.php';

$empID = "MA0001";
$soemthing = matchingDateIn($conn, $empID);


echo $soemthing;




?>