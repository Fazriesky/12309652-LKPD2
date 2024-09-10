<?php
//di sini variabel di buat atau di inisialisasi
$f = 90;
//Looping for digunakan buat menjalankan perulangan sebanyak 30 kali, di mana nilai awal dari $i adalah 1 dan akan bertamfah hingga 30
for ($i = 1; $i <= 30; $i++) {
//Kondisi if mengecek apakah 90 habis dibagi oleh $i. Operator modulus (%) digunakan untuk mendapatkan sisa hasil bagi.
    if (90 % $i == 0) {
// ini untuk hasil output
        echo $f . " : " . $i . " = ".($f / $i);
        echo "<br>";
    }
}
?>