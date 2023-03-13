<?php
$zdanie = readline("Wprowadź losowe zdanie: ");
$a = strtolower($zdanie);
$b = explode(" ", $a);

$array = array();

for ($i = 0; $i < count($b); $i++) {
    $string = $b[$i];
    for ($k = 0; $k < strlen($string); $k++) {
        for ($j = 97; $j <= 122; $j++) {
            if ($string[$k] == chr($j)) {
                if (!in_array(chr($j),$array)){
                    $array[] = chr($j);
                }
            }
        }
    }
}

if (count($array) == 26){
    echo "Dany tekst jest pangramem";
}else{
    echo "Dany tekst nie jest paragramem";
}

?>