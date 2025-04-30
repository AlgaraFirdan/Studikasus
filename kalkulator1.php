<?php

// disini bikin fungsinya
function pertambahan($a, $b) {
    return $a + $b;
}

function pengurangan($a, $b) {
    return $a - $b;
}

function perkalian($a, $b) {
    return $a * $b;
}

function pembagian($a, $b) {
    if ($b == 0) {
        return "gabisa kalo dibagi 0!";
    }
    return $a / $b;
}

$angka1 = [4, 5, 6, 10];          //ini array nya
$angka2 = [2, 3, 7, 5];  
$operator = ["+", "-", "x", ":"];


foreach ($operator as $i => $op) {
    $a = $angka1[$i];
    $b = $angka2[$i];

    if ($op == "+") {
        echo "$a + $b = " . pertambahan($a, $b) . "<br>";
    } elseif ($op == "-") {
        echo "$a - $b = " . pengurangan($a, $b) . "<br>";  // ini pengecekan kalo operatornya sesuai/tidak
    } elseif ($op == "x") {
        echo "$a x $b = " . perkalian($a, $b) . "<br>";
    } elseif ($op == ":") {
        echo "$a : $b = " . pembagian($a, $b) . "<br>";
    } else {
        echo "Operasi '$op' ga dikenal<br>";
    }
}
?>
