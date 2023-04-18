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
<h1>Wyświetl dane o rezerwacji gościa o imieniu:</h1>
<?php

$row = 1;

if (!$fd = fopen('data.csv', 'r')) {
    echo 'Nie mogę otworzyć pliku data.csv';
} else {
    echo "
<form method='post' action=''>
<select name='gość'>";
    while (($data = fgetcsv($fd, 1000, ';')) !== FALSE) {

        $name = '';

        if ($row > 1) {
            $name = $data[0] . $data[1];
            echo "<option value=$row>
$name
</option>";
        }
        $row++;
    }
    echo "
<input type='submit' value='Wyświetl' name='submit'>
</select>
</form>";
}

fclose($fd);
?>
<h1>Dane o rezerwacji:</h1>
<?php
if (isset($_POST['submit'])) {
    $index = $_POST['gość'];
    $details = array();
    $guests = array();
    $row = 1;
    if (($handle = fopen('data.csv', 'r')) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
            $num = count($data);
            $row++;
            if ($row == $index + 1) {
                for ($c = 0; $c < $num; $c++) {
                    $details[] = $data[$c];
                }
            }
        }
    }

    fclose($handle);


    $row = 1;

    if (($handle = fopen('guests.csv', 'r')) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
            $num = count($data);

            $row++;
            if ($row == $index + 1) {
                for ($c = 0; $c < $num; $c++) {
                    $guests[] = $data[$c];
                }
            }
        }
    }
    fclose($handle);
}
?>
<fieldset>
    <legend><strong>Rezerwacja</strong></legend>
    <br>
    Dzień dobry, <?php
    if (isset($_POST['submit'])) {
        echo $details[0];
    } ?><br><br>

    Otrzymaliśmy rezerwację od dnia <?php if (isset($_POST['submit'])) {
        echo $details[11];
    } ?> do
    dnia <?php if (isset($_POST['submit'])) {
        echo $details[12];
    } ?>,

    łączna ilość
    dni pobytu wynosi <?php function iloscDni($zameldowanie, $wymeldowanie)
    {
        $days = (strtotime($wymeldowanie) - strtotime($zameldowanie)) / (60 * 60 * 24);
        echo floor($days);
    }

    if (isset($_POST['submit'])) {
        iloscDni($details[11], $details[12]);
    }
    ?> dni.<br>
    W formularzu <?php
    if (isset($_POST['submit'])) {
        $plec = $details[2];

        if ($plec === "m") {
            echo "zaznaczył Pan";
        } else {
            echo "zaznaczyła Pani";
        }
    }
    ?>, <?php
    if (isset($_POST['submit'])) {

        $dziecko = $details[13];
        $papierosy = $details[14];
        $klimatyzacja = $details[15];

        if ($dziecko && $papierosy && $klimatyzacja) {
            echo "że w pokoju, ma się znajdować łóżeczko dla dziecka, popielniczka do papierosów i klimatyzacja. Jednocześnie uprzedzamy, że wolno palić tylko na balkonie";
        } elseif ($dziecko && $klimatyzacja) {
            echo "że w pokoju, ma się znajdować łóżeczko dla dziecka i klimatyzacja.";
        } elseif ($dziecko && $papierosy) {
            echo "że w pokoju, ma się znajdować łóżeczko dla dziecka i popielniczka do papierosów. Jednocześnie uprzedzamy, że wolno palić tylko na balkonie";
        } elseif ($papierosy && $klimatyzacja) {
            echo "że w pokoju, ma się znajdować popielniczka do papierosów i klimatyzacja. Jednocześnie uprzedzamy, że wolno palić tylko na balkonie";
        } elseif ($dziecko) {
            echo "że w pokoju, ma się znajdować łóżeczko dla dziecka.";
        } elseif ($klimatyzacja) {
            echo "że w pokoju ma się znajdować klimatyzacja.";
        } elseif ($papierosy) {
            echo "że w pokoju ma się znajdować popielniczka do papierosów. Jednocześnie uprzedzamy, że wolno palić tylko na balkonie.";
        } else {
            echo "że w pokoju nie ma się znajdować żadne z wymienionych wcześnije udogodnień. Informujemy, że po przyjeździe na stoliku będzie znajdować się menu od restauracji, która znajduje się na piętrze 0. Zachęcamy do zapoznania się z lokalnymi daniami.";
        }
    }
    ?><br>
    Na poniższe dane w razie jakichkolwiek zmian będziemy przesyłać informację odnośnie rezerwacji.
    <div style="display: flex; flex-direction: row">
        <div style="width: 300px">
            <h1>Dane osobiste:</h1>
            <p><strong>Imię: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[0];
                }
                ?></p>
            <p><strong>Naziwsko: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[1];
                }
                ?></p>
            <p><strong>Ulica: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[3];
                }
                ?></p>
            <p><strong>Miasto: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[7];
                }
                ?></p>
            <p><strong>Email: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[9];
                }
                ?></p>
        </div>
        <div style="width: 300px">
            <h1>Dane rezerwacji:</h1>
            <p><strong>Zameldowanie: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[11];
                }
                ?>, godz: 11:00</p>
            <p><strong>Wymeldowanie: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[12];
                }
                ?>, godz: 11:00</p>
            <p><strong>Liczba gości: </strong><?php
                if (isset($_POST['submit'])) {
                    echo $details[6];
                }
                ?></p>
            <p><strong>Pokój nr: </strong><?php
                if (isset($_POST['submit'])) {
                    $goscie = $details[6];

                    switch ($goscie) {
                        case 1:
                            echo "110";
                            break;
                        case 2:
                            echo "120";
                            break;
                        case 3:
                            echo "150";
                            break;
                        case 4:
                            echo "160";
                            break;
                    }
                }
                ?></p>
            <p><strong>Cena: </strong><?php
                if (isset($_POST['submit'])) {
                    $days = (strtotime($details[12]) - strtotime($details[11])) / (60 * 60 * 24);
                    $price = 180;
                    $total = 0;

                    if ($klimatyzacja) {
                        switch ($goscie) {
                            case 1:
                                $total = ($price * $days) + (20 * $days);
                                break;
                            case 2:
                                $total = ($price * $days) + (20 * $days) + 300;
                                break;
                            case 3:
                                $total = ($price * $days) + (20 * $days) + 600;
                                break;
                            case 4:
                                $total = ($price * $days) + (20 * $days) + 900;
                                break;
                        }
                    } else {
                        switch ($goscie) {
                            case 1:
                                $total = ($price * $days);
                                break;
                            case 2:
                                $total = ($price * $days) + 300;
                                break;
                            case 3:
                                $total = ($price * $days) + 600;
                                break;
                            case 4:
                                $total = ($price * $days) + 900;
                                break;
                        }
                    }

                    echo $total;
                }
                ?></p>
        </div>
        <div style="margin-left: 100px">
            <h1>Dane do przelewu:</h1>
            <p><strong>Nazwa banku: </strong> Millennium</p>
            <p><strong>IBAN: </strong> PL61 1090 1014 0000 0712 1981 2874</p>
            <p><strong>Tytuł: </strong> <?php
                if (isset($_POST['submit'])) {
                    echo "Rezerwacja nr " . $details[16] . "," . $details[9];
                }
                ?></p>
            <p><strong>Numer konta: </strong>36916110997762880142787772</p>
        </div>
    </div>
    <div style="display: flex; flex-direction: row; justify-content: space-between">
        <?php
        if (isset($_POST['submit'])) {
            $j = 0;
            for ($i = 1; $i <= $goscie; $i++) {
                echo "<div>
<h1>Gość$i</h1>
<p><strong>Imię: </strong>{$guests[$j++]}</p>
<p><strong>Nazwisko: </strong>{$guests[$j++]}</p>
</div>";
            }
        }
        ?>
    </div>
</fieldset>
</body>
</html>
