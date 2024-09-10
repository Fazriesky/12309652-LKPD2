<?php
    //Array ini berisi beberapa nama jurusan
    $dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
    $uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
    //Fungsi print_r() digunakan untuk mencetak array yang dihasilkan
print_r($uniqueJurusan);
?>