<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    <h1>User creation:</h1>
    <form action="backend/regcheck.php" method="post">
    <label>Name:</label><br>
    <input type="text" name="fname"><br>
    <label>Email:</label><br>
    <input type="text" name="email"><br>
    <label>Username:</label><br>
    <input type="text" name="usn"><br>
    <label>Password:</label><br>
    <input type="password" name="pass"><br>
    <label>Make account admin?</label><br>
    <input type="radio" name="isAdmin" value="admin">
    <label>Yes</label>
    <input type="radio" name="isAdmin" value="notadmin">
    <label>No</label><br>
    <input type="submit" name="submit">
    </form>

    <?php 
    
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

