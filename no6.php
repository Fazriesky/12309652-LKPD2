<?php 
    $barang = [
        [
        'nama' => 'Pasta Gigi',
        'harga' => 18000,
        'jumlahBeli' => 1,
        ],
        [
        'nama' => 'Sabun Mandi',
        'harga' => 5000,
        'jumlahBeli' => 3,
        ],
        [
        'nama' => 'Aloe Vera Sheet Mask',
        'harga' => 15000,
        'jumlahBeli' => 5,
        ],
        ];
        $totalHarga = 0;
        echo "Daftar belanjaan :";
        echo "<ol>";
        foreach ($barang as $item) {
            $subTot = $item['harga'] * $item['jumlahBeli'];
            $totalHarga += $subTot;
            $formatSub = number_format($subTot, 0, ',', '.');
            echo "<li>{$item['nama']} ({$item['jumlahBeli']}) : {$formatSub}</li>";
        }
        echo "</ol>";
        $formatTot = number_format($totalHarga, 0, ',', '.');
        echo "Total harga yang harus Anda bayar adalah Rp. {$formatTot}\n";
        
?>