<?php include 'otherpages/backend/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>
    <h1>Welcome to X employee time in!</h1>
    <div class="clock-time">
        <h1 id="timenow"></h1>
    </div>
    <p>Today is <?php echo date("M, d, Y"); ?></p>
    <div>
    <form method="post">
        <input name="empID" type="text" placeholder="Please enter your Employee ID" required></input>
        <button type="submit" formaction="otherpages/backend/timeIn.php">Time In</button>
        <button type="submit" formaction="otherpages/backend/timeout.php">Time Out</buton>
    </form>
    </div>
   

<div class="errormessage">
    <?php 
    if (isset($_GET["errorCode"])){
        switch($_GET["errorCode"]){

            case 0:
                echo "<p>Time in/out was succesful!</p>";
            break;
                
            case 1:
                echo "<p>You have already timed in/out on this date!</p>";
            break;

            case 2:
                echo "<p>Employee ID does not exist!</p>";
            break;


        }


    }
    
    ?>
</div>

<form action="" method="GET">
 <label>Search current time table</label><br>
<input type="text" name="search" value= "<?php if (isset($_GET["search"])){echo $_GET["search"];} ?>" placeholder = "Enter Employee ID">
<button type="submit">Search</button>
</form>

<div>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Full Name</th>
                <th>Department</th>
                <th>Time In</th>
                <th>Time Out</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'otherpages/backend/livesearch.php'; ?>
        </tbody>
    </table>
</div>


<div id="displayResult">
    
</div>
<script type= "text/javascript" src="otherpages/javascript/admin.js"></script>
</body>
</html>