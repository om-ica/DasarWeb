<?php 
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$rerata= 0;
$siswaDiatasRerata = 0;

foreach ($nilaiSiswa as $nilai) {
    $rerata += $nilai[1];
}

$rerata /= count($nilaiSiswa);
echo "Rerata nilai: $rerata <br><br>";

echo "Daftar siswa yang nilainya di atas rerata: <br>";
foreach ($nilaiSiswa as $nilai) {
    if ($nilai[1] >= $rerata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>