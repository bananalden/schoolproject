<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/reg.css">
</head>
<body>
<div class="container">
    <div class="title">Registration</div>
    
    <div class="content">
      <form action="backend/regcheck.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="usn">
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
    <!-- <h1>User creation:</h1>
    <form action="backend/regcheck.php" method="post">
        
        <div class="name":>
            <label>Name:</label><br>
            <input type="text" placeholder="Name" name="fname"><br>
        </div>

        <div class="email">
            <label>Email:</label><br>
            <input type="text" placeholder="Email" name="email"><br>
        </div>
        
        <div class="username">
            <label>Username:</label><br>
            <input type="text" placeholder="Username" name="usn"><br>
        </div>
        
        <div class="password">
            <label>Password:</label><br>
            <input type="password" placeholder="Password" name="pass"><br>
        </div>
        
        <div class="tagline">
            <label>Make account admin?</label><br> 
        </div>
    
        <div class="yes">
            <input type="radio" name = "ans" value="yes"> Yes </br>
        </div>

        <div class="no">
            <input type="radio" name = "ans" value="no"> No </br>
        </div>

        <div id="btn">
            <button type="submit" name="submit">Create User</button>
            <button class="back-btn" onclick="history.back()">Go Back</button>
        </div>

    </form> -->

    <?php 
    
    require 'backend/adminauthentication.php';

    
    ?>
</body>
</html>

