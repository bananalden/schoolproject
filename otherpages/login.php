<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">

</head>
<body>
    <div class="title">
        <h1>Login User</h1>
    </div>
    <form action="backend/logcheck.php" method="post">
        <div class="container-1">
            <label class="uname" for="uname">Username:</label><br>
            <input id="username" type="text" placeholder="Enter Your Username" name="uname">
        </div>

        <div class="container-2">
            <label class="password" for="psword">Password:</label><br>
            <input id="psw" type="password" placeholder="Enter Your Password" name="pword">
        </div>

        <button id="btn" type="submit" name="submit">login</button>
    </form>
</body>
</html>
