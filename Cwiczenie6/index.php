<?php

$a = (int)readline("Podaj liczbę naturalną: ");
$b = (int)readline("Podaj liczbę naturalną: ");
$c = (int)readline("Podaj liczbę naturalną: ");


if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Z tych boków można utworzyć trójkąt";
}else{
    echo "Z tych boków nie można utworzyć trójkąta";
}

?>