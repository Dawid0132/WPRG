<?php

$liczba = (int)($_GET['liczba']);


if ($liczba > 0) {
    pierwsza($liczba);
}


function pierwsza($liczba)
{

    $key = true;
    $dzielnik = 0;

    do {
        if ($liczba % 2 === 0 && $liczba !== 2) {
            $key = false;
            echo "<p>Nie jest liczbą pierwszą</p>";
        } else if ($liczba % 3 === 0 && $liczba !== 3) {
            $key = false;
            echo "<p>Nie jest liczbą pierwszą</p>";
        } else if ($liczba % 5 === 0 && $liczba !== 5) {
            $key = false;
            echo "<p>Nie jest liczbą pierwszą</p>";
        } else if ($liczba === 1) {
            $key = false;
            echo "<p>Nie jest liczbą pierwszą</p>";
        } else {
            echo "<p>Jest liczbą pierszą</p>";
            $key = false;
        }
        $dzielnik++;
    } while ($key);

    echo "<p>Ilość wykonania pętli : " . $dzielnik . "</p>";
}

?>
