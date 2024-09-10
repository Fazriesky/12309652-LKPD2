<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$gabung = array_merge($bil1, $bil2);

$urut = array_unique($gabung);

rsort($urut);

echo "Hasil: " . implode(", ", $urut);
?>