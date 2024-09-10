<?php

// ini tuh buat variabel atau menginialisasi
$ulangtahun = "Selamat Ulang Tahun yang ke-17!!!";

// preg_match_all buat mencari semua simbol khusus yang ada dalam string dan di simpan di variabel $sim dengan tipe berupa array
if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $ulangtahun, $sim)) {
    
    echo "Teks : $ulangtahun"; // default menampilkan teks asli
    echo "<br>";
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $sim[0]); // di sini menggabungkan simbol yang ada di kalimat menggunakan implode
    
} else {
    
    echo "Teks : $ulangtahun";  
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat"; // di sini menampilkan kalimat yang tidak ada simbol khususnya
}

?>