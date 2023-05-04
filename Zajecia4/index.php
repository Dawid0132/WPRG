<?php

if (isset($_POST["remember"])) {
    if (isset($_POST["imię"]) && isset($_POST['nazwisko']) && isset($_POST['plec']) && isset($_POST['ulica']) && isset($_POST['kodPocztowy']) && isset($_POST['wiek']) && isset($_POST['goscie']) && isset($_POST['miasto']) && isset($_POST['kraj']) && isset($_POST['email']) && isset($_POST['zameldowanie']) && isset($_POST['wymeldowanie'])) {
        setcookie("imie", $_POST["imię"], time() + 60 * 60 * 24 * 14);
        setcookie("nazwisko", $_POST['nazwisko'], time() + 60 * 60 * 24 * 14);
        setcookie("plec", $_POST['plec'], time() + 60 * 60 * 24 * 14);
        setcookie("ulica", $_POST['ulica'], time() + 60 * 60 * 24 * 14);
        setcookie("kodPocztowy", $_POST['kodPocztowy'], time() + 60 * 60 * 24 * 14);
        setcookie("wiek", $_POST['wiek'], time() + 60 * 60 * 24 * 14);
        setcookie("goscie", $_POST['goscie'], time() + 60 * 60 * 24 * 14);
        setcookie("miasto", $_POST['miasto'], time() + 60 * 60 * 24 * 14);
        setcookie("email", $_POST['email'], time() + 60 * 60 * 24 * 14);
        setcookie("kraj", $_POST['kraj'], time() + 60 * 60 * 24 * 14);
        setcookie("zameldowanie", $_POST['zameldowanie'], time() + 60 * 60 * 24 * 14);
        setcookie("wymeldowanie", $_POST['wymeldowanie'], time() + 60 * 60 * 24 * 14);
        if (isset($_POST["tel"]) || isset($_POST["dziecko"]) || isset($_POST["papierosy"]) || isset($_POST["klimatyzacja"])) {
            if (isset($_POST["tel"])) {
                setcookie("tel", $_POST["tel"], time() + 60 * 60 * 24 * 14);
            }
            if (isset($_POST["dziecko"])) {
                setcookie("dziecko", $_POST["dziecko"], time() + 60 * 60 * 24 * 14);
            }
            if (isset($_POST["papierosy"])) {
                setcookie("papierosy", $_POST["papierosy"], time() + 60 * 60 * 24 * 14);
            }
            if (isset($_POST["klimatyzacja"])) {
                setcookie("klimatyzacja", $_POST["klimatyzacja"], time() + 60 * 60 * 24 * 14);
            }
        }
    }
} else {
    foreach ($_COOKIE as $item => $value) {
        setcookie($item, "", time() - 60 * 60 * 24 * 14);
    }
}

echo("<p>Dziękujemy za podanie danych</p>");

?>
