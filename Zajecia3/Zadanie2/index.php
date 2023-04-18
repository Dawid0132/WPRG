<?php


$text = $_GET["text"] . PHP_EOL;
$plik = 'plik.txt';


if (!$fd = fopen('./plik.txt', 'a')) {
    echo("Nie mogę otworzyć pliku $plik");
} else {
    if (fwrite($fd, $text) === FALSE) {
        echo "Nie można napisać tego w pliku ($plik)";
    } else {
        echo "Pomyślnie udało się zapisać tekst w pliku";
    }
}


fclose($fd);

?>
