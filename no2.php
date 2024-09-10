<?php
// Fungsi untuk menghitung total pembayaran setelah diskon
function calculate_total_payment($total_pembelian) {
    // Dapatkan hari saat ini secara otomatis menggunakan fungsi date() dengan parameter 'l' (format hari, seperti Monday, Tuesday, dll)
    $hari_belanja = date('l');
    
    // Inisialisasi variabel diskon dengan nilai 0
    $discount = 0;
    
    // Pengecekan kondisi pertama: apakah hari ini adalah Jumat (Friday)
    // Jika hari ini adalah Jumat, berikan diskon sebesar 5%
    if ($hari_belanja == 'Tuesday') {
        $discount += 0.05; // Menambahkan 5% ke variabel diskon
    }
    
    // Pengecekan kondisi kedua: apakah total pembelian lebih dari 100.000
    // Jika total pembelian lebih dari 100.000, tambahkan diskon sebesar 7%
    if ($total_pembelian > 100000) {
        $discount += 0.07; // Menambahkan 7% ke variabel diskon
    }
    
    // Menghitung jumlah diskon dalam bentuk nilai
    $jumlah_diskon = $total_pembelian * $discount;
    
    // Menghitung total pembayaran setelah dikurangi diskon
    $total_payment = $total_pembelian - $jumlah_diskon;
    
    // Mengembalikan hasil sebagai array yang berisi total pembayaran, jumlah diskon dalam persen, dan hari pembelian
    return [
        'total_payment' => $total_payment, // Total pembayaran setelah diskon
        'discount' => $discount * 100,     // Diskon dalam persen (dikali 100 untuk menampilkan dalam format %)
        'hari_belanja' => $hari_belanja    // Hari pembelian (seperti Monday, Friday, dll)
    ];
}

// Contoh penggunaan fungsi
// Mendefinisikan variabel total pembelian sebesar 130.000
$total_pembelian = 130000;

// Memanggil fungsi calculate_total_payment dengan parameter total pembelian, dan menyimpan hasilnya di variabel $result
$result = calculate_total_payment($total_pembelian);

// Menampilkan informasi yang didapatkan dari fungsisi

// Menampilkan hari pembelian
echo "Hari Belanja: " . $result['hari_belanja'] . "<br>";

// Menampilkan total pembelian dalam format mata uang Indonesia (Rp) dengan pemisah ribuan menggunakan fungsi number_format
echo "Total Pembelian: Rp " . number_format($total_pembelian, 0, ',', '.') . "<br>";

// Menampilkan diskon dalam persen
echo "Diskon: " . $result['discount'] . "%<br>";

// Menampilkan total pembayaran yang harus dibayar dalam format mata uang Indonesia
echo "Total yang Harus Dibayar: Rp " . number_format($result['total_payment'], 0, ',', '.');
?>