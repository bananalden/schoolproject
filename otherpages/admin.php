<?php 
//require 'backend/adminauthentication.php';
require 'backend/database.php'
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/admins.css">
      <title>Admin</title>
      
</head>
<body>
      
            
<nav class="topnav">
            <ul>
                  <li><a>Home</a></li>
                  <li><a>Name</a></li>
            </ul>
</nav> 
<div class="button-container"> 
      <a class="create-button" href="registration.php">Create User</a>
      <a class="logout-button" href="logout.php">LOG OUT</a>
</div>
      <table class="content">
      <tr class="header">
                  <th>Employee ID</th>
                  <th>Full Name</th>
                  <th>Department</th>
                  <th>Position</th>
                  <th>Status</th>
                  <th>Action</th>
            </tr>
      <?php include 'backend/usertable.php'; ?>
      </table>

  
</body>

</html>