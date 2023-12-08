<?php 
    session_start();
    $userID = $_SESSION["userId"];
    $adminuser = $_SESSION["admincheck"];

if (isset($userID)){

    if ($adminuser != "admin")
    {
        session_destroy();
        header("location:../otherpages/login.php");
    }


}
else{
    session_destroy();
    header("location:../otherpages/login.php");
}


?>

<html>
<head>
      
      <title>Admin</title>
      <link rel="stylesheet" href="../css/admins.css">
</head>
<body>
      
            
      
<div class="button-container"> 
      <a class="create-button">Create User</a>
      <a class="logout-button">LOG OUT</a>
</div>


      <nav class="nav-bar">
            <ul>
                  <li><a href="">UserId</a></li>
                  <li><a href="">Name</a></li>
                  <li><a href="">Username</a></li>
                  <li><a href="">Action</a></li>
            </ul>
      </nav>
</body>
</html>