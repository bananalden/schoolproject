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
    <label>Name:</label><br>
    <input type="text" name="fname"><br>
    <label>Email:</label><br>
    <input type="text" name="email"><br>
    <label>Username:</label><br>
    <input type="text" name="usn"><br>
    <label>Password:</label><br>
    <input type="password" name="pass"><br>
    <label>Make account admin?</label>
    <input type="radio" name="isAdmin"><br>
    <input type="submit" name="submit" value="Register">

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