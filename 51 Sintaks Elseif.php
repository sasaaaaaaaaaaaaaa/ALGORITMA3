<?php
//Contoh Penggunaan Elseif
$usia = 20;

if ($usia < 13) {
    echo "Kamu masih anak-anak.";
} elseif ($usia >= 13 && $usia <= 19) {
    echo "Kamu adalah remaja.";
} elseif ($usia > 19 && $usia <= 30) {
    echo "Kamu sudah dewasa.";
} else {
    echo "Kamu adalah dewasa.";
}
print_r ("<p><strong>by :alika naswa sabilaa");