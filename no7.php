<?php
function shortenText($text, $maxLength = 50) {

    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . '.....';
    }
    
    return $text;
}

$kalimat = "Lorem";
$hasil = shortenText($kalimat);

echo "<b>Kalimat :</b>", $hasil;
?>