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
<?php
$liczba = $_GET["liczba"];
$liczba1 = $_GET["liczba1"];
$type = $_GET["type"];

switch ($type){
    case "mnożenie" :
        echo $liczba * $liczba1;
        break;
    case "dzielenie" :
        echo $liczba / $liczba1;
        break;
    case "dodawanie":
        echo $liczba + $liczba1;
        break;
    case "odejmowanie":
        echo $liczba - $liczba1;
        break;

}

?>
</body>
</html>