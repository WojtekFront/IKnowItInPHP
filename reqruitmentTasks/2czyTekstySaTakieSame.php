<?php
$zmienna1 = "ana";
$zmienna2 = "ana";
$zmienna3 = "";
$zmienna4 = "anna";
$zmienna5 = "Ana";

// czy zmienne istnieją
function zmiennaIstnieje($zmienna1, $zmienna2)
{
    $result;
    if (!isset($zmienna1) || !isset($zmienna2)) {
        $result = true;
    } else ($result = false);
    return $result;
}

// czy są pust
function zmiennaNieJestPusta($z1, $z2)
{
    $result = (!is_null($z1) || !is_null($z2)) ? true : false;
}

// czy zmienne są tego samego typu tekstowego

// czy zmienne czy zmienne są tej samej długości

// iterowanie dwóch zmiennych i porównywanie
