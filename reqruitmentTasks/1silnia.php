<?php
// pierwsze zadanie rekrutacyjne wykonanie silni wraz ze sprawdzeniem
// zostanie przekazana wartość (input), która sprawdzi i wyliczy silnię




$zmienna = 2;
function silnia($value)
{
    if (!isset($value) || is_null($value)) {
        echo "wprowadzona zmienna jest niepoprawna1 <br>";
        $result = "wprowadzona zmienna jest niepoprawna <br>";
    } elseif (!czyToInt($value)) { //sprawdzenie czy zawiera znaki specjalne
        echo "wprowadzona zmienna jest niepoprawna2 <br>";
        $result = "wprowadzona zmienna jest niepoprawna <br>";
    } elseif (true) {
        $result = 1;
        for ($x = 1; $x <= $value; $x++) {
            $result *= $x;
            echo $x . " - x <br>";
            echo $result . " - result<br>";
        }
    } else {
        echo "Inny efekt <br>";
        $result = "Inny efekt <br>";
    }
    return $result;
}

function czyToInt($value)
{
    if (is_integer($value)) {
        $result = czyJestWiekszyOdZera($value) ? true : false;
    } else {
        $result = false;
    }
    return $result;
}

function czyJestWiekszyOdZera($value)
{
    echo "czy jest większa od zera?";
    exit(2);
}


echo silnia($zmienna);
