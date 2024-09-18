<?php 
$kursi = 45;
$diPakai= 28;

$kursiKosong = $kursi - $diPakai;
$persentase = ($kursiKosong / $kursi) * 100;

echo "Persentase kursi yang masih kosong yaitu: $persentase %";
?>