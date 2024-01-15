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

      <nav> 
            <div class="menu-icon">
                  <span class="fas fa-bars"></span>
            </div>

            <div class="logo">Admin user</div>

            <div class="nav-items">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
            </div>

            <div class="search-icon">
                  <span class="fas fa-search"></span>
            </div>

            <div class="cancel-icon">
                  <span class="fas fa-times"></span>
            </div>

            <form action="#">
                  <input type="search" class="search-data" placeholder="Search" required>
                  <button type="submit" class="fas fa-search"></button>
            </form>

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