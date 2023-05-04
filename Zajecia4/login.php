<?php
session_start();

$login = "login";
$password = "password";

if (isset($_POST["login"]) && isset($_POST["password"])) {
    if ($_POST["login"] == $login && $_POST["password"] == $password) {
        if (!isset($_COOKIE["login"])) {
            setcookie("login", $_POST["login"], time() + 60 * 60 * 24 * 14);
        }
        echo "<div style='display: flex; flex-direction: row;'>
<p>Witaj, {$_COOKIE["login"]}</p>
<form style='align-self: end;' method='post'>
<input style='margin-left: 100px' type='submit' value='wyloguj' name='wyloguj'>
</form>
</div>";
        include("form.php");
    } else {
        session_destroy();
        include("loginForm.php");
        echo "<div>";
        if ($_POST["login"] != $login) {
            echo "<p style='color: red'>*Nieprawidłowy login</p>";
        }
        if ($_POST["password"] != $password) {
            echo "<p style='color: red'>*Nieprawidłowe hasło</p>";
        }
        echo "</div>";
    }
}

if (isset($_POST["wyloguj"])) {
    session_destroy();
    include("loginForm.php");
}


?>
