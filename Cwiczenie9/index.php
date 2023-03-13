<?php
$tablica = array();
$tablica1 = array();
$iloczn = array();

for ($i=0; $i<3; $i++){
    array_push($tablica,rand(0,20));
    array_push($tablica1,rand(0,30));
}

for ($i=0; $i<3; $i++){
    $wynik = $tablica[$i] * $tablica1[$i];
    array_push($iloczn,$wynik);
}

var_dump($iloczn);

?>