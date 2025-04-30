<?php

//disini bikin fungsinya sesuai operasi
function tambah($a,$b) {
    return $a + $b;
}

function kurang($a,$b) {
    return $a - $b;
}

function kali($a,$b) {
    return $a * $b;
}

function bagi($a,$b) {
    if ($b == 0){
        return "gabisa kalo dibagi 0 brok";
    }
    return $a/$b;
}

$operasi = [
    '+' => 'tambah',
    '-' => 'kurang',      //ini index array
    '*' => 'kali',
    '/' => 'bagi'
];

$angka1 = 8;
$angka2 = 4;
$operator = '*';

if (array_key_exists($operator, $operasi)) {
    $fungsi = $operasi[$operator];
    $hasil = $fungsi($angka1, $angka2);
    echo "Hasil: $angka1 $operator $angka2 = $hasil";
} else {
    echo "Operator ga dikenalin!";
}
?>