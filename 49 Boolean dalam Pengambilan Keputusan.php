<?php
$login_sukses = true;

if ($login_sukses) {
    echo "Selamat bergabung!";
    echo "<br><hr>";

} else {
    echo "Login gagal, silakan coba lagi.";
}

//Konversi ke Boolean
$nilai = 0;

if ($nilai) {
    echo "Variabel ini bernilai true";
} else {
    echo "Variabel ini bernilai false";
    echo "<br><hr>";
}
// Keluaran akan "Variabel ini bernilai false" karena nilai 0 dianggap false.

//Boolean dan Fungsi
$isiFile = "Contoh teks di dalam file.";
$status = file_put_contents("example.txt", $isiFile);

if ($status !== false) {
    echo "Penulisan file berhasil!";
    echo "<hr>";
} else {
    echo "Penulisan file gagal.";
}
print_r ("<p><strong>by :alika naswa sabila");