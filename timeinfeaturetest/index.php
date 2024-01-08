<!DOCTYPE html>
<?php 
session_start();
$_SESSION["isTimedin"] = "isTimedin";

$sessionvar = $_SESSION["isTimedin"];


?>
<html>
<body>
 
        <button id="timein" value="test">Time In</button>
        <button id="timeout" value="test">Time Out</button>
        <?php echo '<p id="session">'. $sessionvar . '</p>'; ?>
        

<p id="test"></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script type="text/javascript" src="timein.js"></script>
</body>
</html>

