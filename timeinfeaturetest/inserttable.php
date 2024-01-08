<?php 
session_start();
include 'database.php';
$text = $_POST["value"];
if(isset($_POST)){
    
    $_SESSION["isTimedin"] = $_POST["isTimedin"];
    
    $sql = "INSERT INTO insertdata (poopoofart) VALUES (?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){

        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $text);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    
}


?>