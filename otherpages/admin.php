<?php 
require 'backend/adminauthentication.php';
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
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Action</th>
            </tr>
      
            <tr>
                  <td>1</td>
                  <td>Alden Flores</td>
                  <td>aldenflores</td>
                  <td>alden@gmail.com</td>
                  <td><a>UPDATE</a><a>DELETE</a></td>
            </tr>
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