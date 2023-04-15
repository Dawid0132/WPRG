<?php


$text = $_GET["text"];
$plik = 'plik.txt';


if (is_writable($plik)) {
    if (!$fd = fopen('./plik.txt', 'wb')) {
        echo("Nie mogę otworzyć pliku $plik");
        exit;
    }

    if (fwrite($fd, $text) === FALSE) {
        echo "Nie można napisać tego w pliku ($plik)";
        exit;
    }

    echo "Pomyślnie udało się zapisać tekst w pliku";

    fclose($fd);
}else {
    echo "Nie można w pliku $plik napisać tekstu";
}
?>
