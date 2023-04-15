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

</body>
</html>
<?php

session_start();

$_SESSION['imię'] = $_GET['imię'];
$_SESSION['zameldowanie'] = $_GET['zameldowanie'];
$_SESSION['wymeldowanie'] = $_GET['wymeldowanie'];
$_SESSION['email'] = $_GET['email'];
$_SESSION['miasto'] = $_GET['miasto'];
$_SESSION['klimatyzacja'] = isset($_GET['klimatyzacja']);
$_SESSION['dziecko'] = isset($_GET['dziecko']);
$_SESSION['papierosy'] = isset($_GET['papierosy']);
$_SESSION['goscie'] = $_GET['goscie'];
$_SESSION['plec'] = $_GET['plec'];
$_SESSION['nazwisko'] = $_GET['nazwisko'];
$_SESSION['ulica'] = $_GET['ulica'];



$goscie = $_GET["goscie"];

echo "<form action='index.php'>";
for ($i = 1; $i <= $goscie; $i++) {
    echo "
<h1>Gość$i</h1>
<label for='imię$i'>Imię:</label>
<input type='text' name='imię$i' required>
<label for='nazwisko$i'>Nazwisko:</label>
<input type='text' name='nazwisko$i' required>
";
}
echo "<div style='margin-top: 50px'><input type='submit' value='Submit'></div>
</form>
";
?>
