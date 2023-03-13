<?php

$miesiąc = readline("Podaj liczbę z zakresu od 1 do 12: ");


    switch ($miesiąc) {
        case 1:
            echo "Miesiąc Styczeń: 31dni";
            break;
        case 2:
            echo "Miesiąc Luty: 28dni";
            break;
        case 3:
            echo "Miesiąc Marzec: 31dni";
            break;
        case 4:
            echo "Miesiąc Kwiecień: 30dni";
            break;
        case 5:
            echo "Miesiąc Maj: 31dni";
            break;
        case 6:
            echo "Miesiąc Czerwiec: 30dni";
            break;
        case 7:
            echo "Miesiąc Lipiec: 31dni";
            break;
        case 8:
            echo "Miesiąc Sierpień: 31dni";
            break;
        case 9:
            echo "Miesiąc Wrzesień: 30dni";
            break;
        case 10:
            echo "Miesiąc Październik: 31dni";
            break;
        case 11:
            echo "Miesiac Listopad: 30dni";
            break;
        case 12:
            echo "Miesiąc Grudzień: 31dni";
            break;
        default:
            echo "BŁĄD";
    }

?>