<?php

use function PHPSTORM_META\map;

 include ('backend/database.php'); ?>

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
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <div class="name">
            <label>Name:</label><br>
            <input type="text" placeholder="Enter Your Name" name="fname"><br>
        </div>
    
        <div class="email">
            <label>Email:</label><br>
            <input type="text" placeholder="Enter Your Email" name="email"><br>
        </div>
        
        <div class="username">
            <label>Username:</label><br>
            <input type="text" placeholder="Enter Your Username" name="usn"><br>
        </div>
    
        <div class="password">
            <label>Password:</label><br>
            <input type="password" placeholder="Enter Your Password" name="pass"><br>
        </div>
    
        <div class="admin">
            <label>Make account admin?</label>
            <input class="circle" type="radio" name="isAdmin"><br>
            <input class="register" type="submit" name="submit" value="Register">
        </div>

        
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, "usn", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

    

    if (empty($name) && empty($username) && empty($password)){
        echo "Please fill out the missing fields";
    }

    else {
        $sql = "INSERT INTO user_data (name, email, username, password) VALUES ('$name','$email','$username','$password') ";
        try{
            mysqli_query($conn, $sql);
            echo "Succesfully registered!";
        }
        
        
        catch(mysqli_sql_exception){
            echo "Could not register, user may already exist";
        }
       
        
    }

}

mysqli_close($conn);

?>