<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Log in Form</h1>
        <Form name="form" action="login.php" method="post">
            <label for="user"> User Name </label>
            <input type="text" id="user" name="user" placeholder="User name" required><br><br>
            <label for="password"> Password </label>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" value="Log In" name="submit" id="btn">
        </form>
    </div>  
</body>
</html>