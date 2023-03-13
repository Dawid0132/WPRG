<?php

$a = readline("Podaj liczbę naturalną: ");
$b = readline("Podaj liczbę naturalną: ");
$c = readline("Podaj liczbę naturalną: ");

if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Z tych boków można utworzyć trójkąt";
    } else {
        echo "Z tych boków nie można utworzyć trójkąta";
    }
} else {
    echo "BŁĄD";
}

?>