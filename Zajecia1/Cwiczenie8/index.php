<?php
$liczba = readline("Podaj pierwszą liczbę: ");
$liczba1 = readline("Podaj drugą liczbę: ");
$liczba2 = readline("Podaj trzecią liczbę: ");

$kolejka = array();

array_push($kolejka, $liczba, $liczba1, $liczba2);


$i = 0;

while ($i < count($kolejka)) {
    for ($j = 0; $j < count($kolejka) - 1; $j++) {
        if ($kolejka[$j] > $kolejka[$j + 1]) {
            $a = $kolejka[$j];
            $kolejka[$j] = $kolejka[$j+1];
            $kolejka[$j + 1] = $a;
        }
    }
    $i++;
}

$i = 0;

var_dump($kolejka);


while ($i < count($kolejka)) {
    for ($j = count($kolejka)-1; $j > 0; $j--) {
        if ($kolejka[$j] > $kolejka[$j - 1]) {
            $a = $kolejka[$j];
            $kolejka[$j] = $kolejka[$j-1];
            $kolejka[$j - 1] = $a;
        }
    }
    $i++;
}

var_dump($kolejka);
?>