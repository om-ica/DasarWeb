<?php 
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$panjangArray = count($nilaiSiswa);
$rerata = 0;

sort($nilaiSiswa);

$nilaiTertinggi1 = $nilaiSiswa[$panjangArray - 1];
$nilaiTertinggi2 = $nilaiSiswa[$panjangArray - 2];
$nilaiTerendah1 = $nilaiSiswa[0];
$nilaiTerendah2 = $nilaiSiswa[1];

$banyakNilai = 0;
foreach ($nilaiSiswa as $nilai) {
    if ($nilai != $nilaiTertinggi1 && $nilai != $nilaiTertinggi2 && $nilai  != $nilaiTerendah1 && $nilai != $nilaiTerendah2) {
        $rerata += $nilai;
        $banyakNilai++;
    }
}

$rerata /= $banyakNilai;
echo "Rerata dari nilai siswa dengan mengecualikan dua nilai tertinggi dan terendah adalah $rerata";
?>