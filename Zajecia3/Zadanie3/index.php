<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

session_start();

$responsible = array([]);
$guests = array([]);

$responsible[0][0] = $_SESSION['imię'];
$responsible[0][1] = $_SESSION['nazwisko'];
$responsible[0][2] = $_SESSION['plec'];
$responsible[0][3] = $_SESSION['ulica'];
$responsible[0][4] = $_SESSION['kodPocztowy'];
$responsible[0][5] = $_SESSION['wiek'];
$responsible[0][6] = $_SESSION['goscie'];
$responsible[0][7] = $_SESSION['miasto'];
$responsible[0][8] = $_SESSION['kraj'];
$responsible[0][9] = $_SESSION['email'];
$responsible[0][10] = $_SESSION['tel'];
$responsible[0][11] = $_SESSION['zameldowanie'];
$responsible[0][12] = $_SESSION['wymeldowanie'];
$responsible[0][13] = $_SESSION['dziecko'];
$responsible[0][14] = $_SESSION['papierosy'];
$responsible[0][15] = $_SESSION['klimatyzacja'];
$responsible[0][16] = rand(100000, 999999);

$j = 0;

for ($i = 1; $i <= $_SESSION['goscie']; $i++) {
    $guests[0][$j++] = $_GET['imię' . $i];
    $guests[0][$j++] = $_GET['nazwisko' . $i];
}

if ($_SESSION['goscie'] !== 4) {
    for ($i = $_SESSION['goscie']; $i < 4; $i++) {
        $guests[0][$j++] = null;
        $guests[0][$j++] = null;
    }
}


if (!$fd = fopen("data.csv", 'a')) {
    echo 'Nie mogę otworzyć pliku data.csv';
} else {
    foreach ($responsible as $guest) {
        fputcsv($fd, $guest, ";");
    }
    fclose($fd);
}


if (!$fd = fopen('guests.csv', 'a')) {
    echo 'Nie mogę otworzyć pliku guests.csv';
} else {
    foreach ($guests as $guest) {
        fputcsv($fd, $guest, ';');
    }
    $submitted = true;
    fclose($fd);
}
header('Location: index1.php');
?>
</body>
</html>
