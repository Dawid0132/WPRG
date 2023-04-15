<?php
include 'index1.php';


$liczba = $_GET["liczba"];
$liczba1 = $_GET["liczba1"];
$type = $_GET["type"];


switch ($type){
    case "mnożenie" :
        echo mnożenie($liczba,$liczba1);
        break;
    case "dzielenie" :
        echo dzielenie($liczba,$liczba1);
        break;
    case "dodawanie":
        echo dodawanie($liczba,$liczba1);
        break;
    case "odejmowanie":
        echo odejmowanie($liczba,$liczba1);
        break;
}
?>
