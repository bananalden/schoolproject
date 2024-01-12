<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Welcome to X employee time in!</h1>
    <div class="clock-time">
        <h1 id="timenow"></h1>
    </div>
    <p>Today is <?php echo date("M, d, Y"); ?></p>
    
    <form class="btn" method="post">
        <input class="form-text" name="empID" type="text" placeholder="Please enter your Employee ID" required>
        <button class="time-in" type="submit" formaction="otherpages/backend/timeIn.php">Time In</button>
        <button class="time-out" type="submit" formaction="otherpages/backend/timeout.php">Time Out</buton>
    </form>

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

<script src="otherpages/javascript/admin.js"></script>
</body>
</html>