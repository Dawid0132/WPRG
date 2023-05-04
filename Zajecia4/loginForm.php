<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="./login.php">
    <fieldset>
        <legend>Login</legend>
        <label for="login">Login</label>
        <input id="login" type="text" name="login" value="<?php
        if (isset($_COOKIE["login"])) {
            echo $_COOKIE["login"];
        }
        ?>"/>
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
