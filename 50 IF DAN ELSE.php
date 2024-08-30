<?php
//Contoh Penggunaan If
$umur = 20;

if ($umur >= 17) {
    echo "Kamu sudah dewasa.";
    echo "<br><hr>";
}
//Contoh Penggunaan If dan Else
$umur = 16;

if ($umur >= 17) {
    echo "Kamu sudah cukup umur.";
} else {
    echo "Kamu belum cukup umur.";
    echo "<br><hr>";
}
//Kombinasi Dengan ElseIf
$suhu = 30;

if ($suhu < 20) {
    echo "Cuaca dingin.";
} elseif ($suhu <= 30) {
    echo "Cuaca hangat.";
    echo "<br><hr>";
} else {
    echo "Cuaca panas.";
}
print_r ("<p><strong>by :alika naswa sabilaa");