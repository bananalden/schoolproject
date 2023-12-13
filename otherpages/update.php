<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="../css/reg.css">
</head>
<body>
<div class="container">
    <div class="title">User Update</div>
    
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Update user's full name" name="fname">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Update user's username" name="usn">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="pass">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="isAdmin" id="dot-1" value="admin">
          <input type="radio" name="isAdmin" id="dot-2" value="notadmin">
          <span class="gender-title">Admin</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Yes</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">No</span>
          </label>

          </div>
        </div>
        <div class="button">
          <input type="submit" value="submit" name="submit">
          <a href="admin.php">Back to Admin Page</a>
         <!-- <input type="submit" value="Back" href="admin.php"> -->
        </div>
      </form>
    </div>
  </div>