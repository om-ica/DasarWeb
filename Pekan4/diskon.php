<?php 
$beli = 120000;
$diskon = 0.20;
$hargaAkhir = 0;

if ($beli > 100000) {
    $hargaDiskon = $diskon * $beli;
    $hargaAkhir = $beli - $hargaDiskon;
}

echo "Diskon yang didapat sebesar Rp$hargaDiskon <br>";
echo "Harga setelah diskon menjadi Rp$hargaAkhir"
?>