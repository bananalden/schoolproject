<?php 

require 'database.php';




if (isset($_GET["getID"])){

    $getID = $_GET["getID"];

    $sql = "DELETE FROM userlist WHERE userID = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){

        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $getID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../admin.php?deleteSuccess=1');

}



?>