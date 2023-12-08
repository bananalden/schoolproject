<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/reg.css">
</head>
<body>
    <h1>User creation:</h1>
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
        </div>
    </form>

    <?php 
    
    require 'adminauthentication.php';

    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Some fields are empty, please fill!</p>";
        }

        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Email entered is invalid, please use valid email!</p>";
        }

        else if($_GET["error"] == "none"){
            echo "<p>Account has been registered successfully</p>";
        }

    }
    
    ?>
</body>
</html>

