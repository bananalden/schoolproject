<?php 
//require 'backend/adminauthentication.php';
require 'backend/database.php'
?>

<html>
<head>
      
      <title>Admin</title>
      <link rel="stylesheet" href="../css/admins.css">
</head>
<body>
      
            
      
<div class="button-container"> 
      <a class="create-button" href="registration.php">Create User</a>
      <a class="logout-button" href="logout.php">LOG OUT</a>
</div>
      <table class="content">
      <tr class="header">
                  <th>Employee ID</th>
                  <th>Full Name</th>
                  <th>Position</th>
                  <th>Employee Status</th>
                  <th>Status</th>
                  <th>Action</th>
            </tr>
      <?php include 'backend/usertable.php'; ?>
      </table>

      <!-- <nav class="nav-bar">
            <ul>
                  <li>UserId</li>
                  <li>Name</li>
                  <li>>Username</li>
                  <li>Action</li>
            </ul>
      </nav> -->
</body>

</html>