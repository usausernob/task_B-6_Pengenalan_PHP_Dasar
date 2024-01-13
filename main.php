<?php

function luas_lingkaran(float $r): float
{
    return pi() * pow(($r / 3), 2);
}

function keliling_lingkaran(float $r): float
{
    return 2 * pi() * ($r / 5);
}

function luas_persegi_panjang(float $angka): float
{
    return ($angka / 3) * ($angka / 5);
}

for ($i = 1; $i <= 100; $i++) {
    $result = 0;

    if ($i % 3 == 0 && $i % 5 == 0) {
        $result = luas_persegi_panjang($i);
    } elseif ($i % 3 == 0) {
        $result = luas_lingkaran($i);
    } elseif ($i % 5 == 0) {
        $result = keliling_lingkaran($i);
    } else {
        $result = $i;
    }

    echo number_format($result, 2, ".", "") . PHP_EOL;
}
