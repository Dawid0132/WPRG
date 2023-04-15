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

<?php session_start()

?>
<fieldset>
    <legend><strong>Rezerwacja</strong></legend>
    <br>
    Dzień dobry, <?php echo $_SESSION['imię']?><br><br>

    Otrzymaliśmy rezerwację od dnia <?php echo $_SESSION["zameldowanie"] ?> do dnia <?php echo $_SESSION["wymeldowanie"] ?>,
    łączna ilość
    dni pobytu wynosi <?php function iloscDni()
    {
        $days = (strtotime($_SESSION["wymeldowanie"]) - strtotime($_SESSION["zameldowanie"])) / (60 * 60 * 24);
        echo floor($days);
    }

    iloscDni(); ?> dni.<br>
    W formularzu <?php

    $plec = $_SESSION["plec"];

    if ($plec === "m") {
        echo "zaznaczył Pan";
    } else {
        echo "zaznaczyła Pani";
    }

    ?>, <?php

    $dziecko = $_SESSION["dziecko"];
    $papierosy = $_SESSION["papierosy"];
    $klimatyzacja = $_SESSION["klimatyzacja"];

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
    ?><br>
    Na poniższe dane w razie jakichkolwiek zmian będziemy przesyłać informację odnośnie rezerwacji.
    <div style="display: flex; flex-direction: row">
        <div style="width: 300px">
            <h1>Dane osobiste:</h1>
            <p><strong>Imię: </strong><?php
                echo $_SESSION["imię"];
                ?></p>
            <p><strong>Naziwsko: </strong><?php
                echo $_SESSION["nazwisko"];
                ?></p>
            <p><strong>Ulica: </strong><?php echo
                $_SESSION["ulica"]; ?></p>
            <p><strong>Miasto: </strong><?php
                echo $_SESSION["miasto"];
                ?></p>
            <p><strong>Email: </strong><?php
                echo $_SESSION["email"];
                ?></p>
        </div>
        <div style="width: 300px">
            <h1>Dane rezerwacji:</h1>
            <p><strong>Zameldowanie: </strong><?php
                echo $_SESSION["zameldowanie"];
                ?>, godz: 11:00</p>
            <p><strong>Wymeldowanie: </strong><?php
                echo $_SESSION["wymeldowanie"];
                ?>, godz: 11:00</p>
            <p><strong>Liczba gości: </strong><?php
                echo $_SESSION["goscie"];
                ?></p>
            <p><strong>Pokój nr: </strong><?php
                $goscie = $_SESSION["goscie"];

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
                ?></p>
            <p><strong>Cena: </strong><?php
                $days = (strtotime($_SESSION["wymeldowanie"]) - strtotime($_SESSION["zameldowanie"])) / (60 * 60 * 24);
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

                ?></p>
        </div>
        <div style="margin-left: 100px">
            <h1>Dane do przelewu:</h1>
            <p><strong>Nazwa banku: </strong> Millennium</p>
            <p><strong>IBAN: </strong> PL61 1090 1014 0000 0712 1981 2874</p>
            <p><strong>Tytuł: </strong> <?php
                $rand = rand(100000,999999);
                echo "Rezerwacja nr ". $rand . "," . $_SESSION["email"];
                ?></p>
            <p><strong>Numer konta: </strong>36916110997762880142787772</p>
        </div>
    </div>
    <div style="display: flex; flex-direction: row; justify-content: space-between">
        <?php
            for ($i=1; $i<=$goscie; $i++){
                echo "<div>
<h1>Gość$i</h1>
<p><strong>Imię: </strong>{$_GET['imię'.$i]}</p>
<p><strong>Nazwisko: </strong>{$_GET['nazwisko'.$i]}</p>
</div>
";}
        ?>
    </div>
</fieldset>
</body>
</html>
