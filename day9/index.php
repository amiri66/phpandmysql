<?php
$username = $_GET['username'];
$password = $_GET['password'];

echo $username;
echo "<br>";
echo $password;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Submit">
</body>
</html>