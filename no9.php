<?php
// Fungsi untuk menentukan jenis-jenis koin yang digunakan
function jenisKoin($jumlahKoin){
    // Array yang berisi jenis-jenis koin yang tersedia
    $koin = [1000,500,200];
    
    // Array kosong untuk menyimpan hasil jenis koin yang digunakan
    $hasil = [];

    // Loop melalui setiap jenis koin yang ada
    foreach($koin as $k) {
        // Jika jumlah koin yang dimiliki lebih besar atau sama dengan jenis koin saat ini
        if($jumlahKoin >= $k) {
            // Tambahkan jenis koin ini ke dalam array hasil
            $hasil[] = $k;
            
            // Kurangi jumlah koin sesuai dengan jenis koin yang dipakai
            // intdiv membagi tanpa hasil pecahan, jadi hanya tersisa koin yang belum terpakai
            $jumlahKoin -= intdiv($jumlahKoin, $k) * $k;
        }
    }

    // Kembalikan hasil berupa array jenis-jenis koin yang digunakan
    return $hasil;
}

// Mendefinisikan jumlah koin yang akan dihitung
$jumlahKoin = 1750;

// Memanggil fungsi untuk mendapatkan jenis-jenis koin yang digunakan
$jenisKoin = jenisKoin($jumlahKoin);

// Menampilkan hasil
echo "Jenis koin untuk Rp. $jumlahKoin";

// Loop melalui array hasil untuk menampilkan setiap jenis koin yang digunakan
foreach($jenisKoin as $nilai) {
    echo "<ul><li> Rp. $nilai </li></ul>";
}

?>