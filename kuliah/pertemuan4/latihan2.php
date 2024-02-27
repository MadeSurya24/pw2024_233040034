<?php 
// sisi kubus a = 9, sisi kubus b = 4
// hitung total volume kedua kubus

// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $totalAB = $volume_a + $volume_b;
// echo "Total Volume Kubus A & B adalah = $total";
// echo "<br>";
function total_volume_dua_kubus($a, $b) {
    $volume_a = $a ** 3; // ** adalah pangkat
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;

    return $total; 
    // return $a ** 3 + $b ** 3 (bisa juga seperti ini)
}

echo "Total volume kubus A & B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total volume kubus C & D = " . total_volume_dua_kubus(10,15);