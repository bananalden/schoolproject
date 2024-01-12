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
<p>Already have an account? </p>
<h1 id="timenow"></h1>
<p>Today is <?php echo date("M, d, Y"); ?></p>
<form method="post">
<input name="empID" type="text" placeholder="Please enter your Employee ID" required>
<button type="submit" formaction="otherpages/backend/timeIn.php">Time In</button>
<button type="submit">Time Out</buton>
</form>
<script src="otherpages/javascript/admin.js"></script>
</body>
</html>