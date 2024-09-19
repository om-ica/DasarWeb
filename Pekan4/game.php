<?php 
$poin = [551, 449];

foreach ($poin as $totalSkor) {
    echo "Total skor pemain adalah: $totalSkor <br>";
    echo "Apakah pemain mendapat hadiah tambahan? ";
    if ($totalSkor > 500) {
        echo "Ya<br>";
    } else {
        echo "Tidak<br>";
    }
}
?>