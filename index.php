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
<p>Today is <?php echo date("M, d, Y") ?></p>
<form method="post">
<input name="empID" type="text">
<button type="submit">Time In</input>
<button type="submit">Time Out</input>


</form>
<script src="otherpages/javascript/admin.js"></script>
</body>
</html>