<?php

$liczba = readline("Wprowadź liczbę: ");


for ($i = 0; $i < $liczba; $i++) {
    for ($j = $i; $j >= 0; $j--) {
        echo "*";
    }
    echo "\n";
}

for ($i = $liczba; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
        echo "*";
    }
    echo "\n";
}

$l = $liczba;

for ($i = 0; $i < $liczba; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo " ";
    }
    for ($k = 0; $k < $l; $k++) {
        echo "*";
    }
    $l--;
    echo "\n";
}

$l = 1;

for ($i = $liczba; $i >= 1; $i--) {
    for ($j = 1; $j <= $i - 1; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $l; $k++) {
        echo "*";
    }
    $l++;
    echo "\n";
}

?>