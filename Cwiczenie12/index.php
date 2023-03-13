<?php

$kolumna = readline("Wprowadź liczbę kolumn: ");
$wiersz = readline("Wprowadź liczbę wierszy: ");

$array[$wiersz][$kolumna] = [];


for ($i = 0; $i < $kolumna; $i++) {
    for ($j = 0; $j < $wiersz; $j++) {
        $liczba = readline("Podaj liczbę : ");
        if (is_numeric($liczba)) {
            $array[$j][$i] = $liczba;
        } else {
            echo "BŁĄD";
            break;
        }
    }
}


for ($i = 0; $i < $wiersz; $i++) {
    for ($j = 0; $j < $kolumna; $j++) {
        echo $array[$i][$j]." ";
    }
    echo "\n";
}


?>