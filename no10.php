<?php
// Fungsi untuk memeriksa jawaban siswa dan menghitung jumlah jawaban benar dan salah
function cekJawaban($nama, $jawabanSiswa, $jawabanBenar) {
    // Variabel untuk menyimpan jumlah jawaban benar
    $jumlahBenar = 0;

    // Menghitung jumlah jawaban benar dengan cara membandingkan setiap jawaban siswa dengan jawaban benar
    foreach ($jawabanSiswa as $index => $jawaban) {
        // Jika jawaban siswa sama dengan jawaban benar pada indeks yang sama
        if ($jawaban === $jawabanBenar[$index]) {
            // Tambahkan 1 ke variabel jumlahBenar
            $jumlahBenar++;
        }
    }

    // Menghitung jumlah jawaban salah dengan mengurangi total jumlah soal dengan jumlah jawaban benar
    $jumlahSalah = count($jawabanBenar) - $jumlahBenar;

    // Output hasil pengecekan
    echo "Nama : $nama";  // Menampilkan nama siswa
    echo "<br>";  // Membuat baris baru di HTML
    echo "Jumlah Jawaban Benar : $jumlahBenar";  // Menampilkan jumlah jawaban benar
    echo "<br>";  // Membuat baris baru di HTML
    echo "Jumlah Jawaban Salah : $jumlahSalah";  // Menampilkan jumlah jawaban salah
}

// Contoh penggunaan fungsi cekJawaban
$namaSiswa = "Putri";  // Nama siswa
$jawabanSiswa = ['A','B','C','C','A','A','E','C','E','E'];  // Jawaban yang diberikan oleh siswa
$jawabanBenar = ['A','D','C','C','B','A','E','B','A','E'];  // Jawaban yang benar untuk soal

// Memanggil fungsi cekJawaban untuk menampilkan hasilnya
cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
?>
