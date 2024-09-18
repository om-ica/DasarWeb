<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah {$a} + {$b} = {$hasilTambah} <br>";
echo "Hasil Kurang {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil Kali {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil Bagi {$a} / {$b} = {$hasilBagi} <br>";
echo "Sisa Bagi {$a} % {$b} = {$sisaBagi} <br>";
echo "Hasil Pangkat {$a} ^ {$b} = {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama: $hasilLebihBesarSama <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Logika And: $hasilAnd <br>";
echo "Logika Or: $hasilOr <br>";
echo "Negasi A: $hasilNotA <br>";
echo "Negasi B: $hasilNotB <br><br>";

$a += $b;
echo 'Hasil penugasan tambah ' . $a . '<br>';
$a -= $b;
echo 'Hasil penugasan kurang ' . $a . '<br>';
$a *= $b;
echo 'Hasil penugasan kali ' . $a . '<br>';
$a /= $b;
echo 'Hasil penugasan bagi ' . $a . '<br>';
$a %= $b;
echo 'Hasil penugasan modulus ' . $a . '<br><br>';

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik: $hasilIdentik <br>";
echo "Hasil tidak identik: $hasilTidakIdentik";
?>