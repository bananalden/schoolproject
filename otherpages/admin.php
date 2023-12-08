<?php 
    session_start();
    $userID = $_SESSION["userId"];
    $adminuser = $_SESSION["admincheck"];
    $fullname = $_SESSION["fullName"];
    $loggedin = $_SESSION["isloggedin"];

    

      if (empty($loggedin) || empty($loggedin) || empty($loggedin) || empty($loggedin)){
            session_destroy();
            header("location:login.php");
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
      <a class="logout-button" href="logout.php">LOG OUT</a>
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