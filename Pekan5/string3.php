<?php 

// $pesan = "saya arek malang";
// echo strrev($pesan) . "<br>";

$pesan = "saya arek malang";
# ubah variable $pesan menjadi aaray dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>