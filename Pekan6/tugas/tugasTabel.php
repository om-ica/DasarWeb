<!DOCTYPE html>
<head>
    <title>Tugas Tabel Data siswa</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="../../Pekan5/jquery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#kotakKlik").click(function() {
                $("#tabel").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <div id="kotakKlik">
    <h2>Data Siswa</h2>
    </div>
    <div id="tabel">
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php 
        $siswa = array (
                        array("Andi", 15, "10A", "Malang"),
                        array("Siti", 16, "10B", "Batu"),
                        array("Budi", 15, "10A", "Dinoyo"),
                        array("Anton", 25, "15A", "Dinoyo")
                        );

        echo "<tr>";
                echo "<td>". $siswa[0][0] ."</td>";
                echo "<td>". $siswa[0][1] ."</td>";
                echo "<td>". $siswa[0][2] ."</td>";
                echo "<td>". $siswa[0][3] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". $siswa[1][0] ."</td>";
                echo "<td>". $siswa[1][1] ."</td>";
                echo "<td>". $siswa[1][2] ."</td>";
                echo "<td>". $siswa[1][3] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". $siswa[2][0] ."</td>";
                echo "<td>". $siswa[2][1] ."</td>";
                echo "<td>". $siswa[2][2] ."</td>";
                echo "<td>". $siswa[2][3] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". $siswa[3][0] ."</td>";
                echo "<td>". $siswa[3][1] ."</td>";
                echo "<td>". $siswa[3][2] ."</td>";
                echo "<td>". $siswa[3][3] ."</td>";
            echo "</tr>";      
        ?>
    </table>                    
    <?php 
    $total = 0;
    for ($i=0; $i < count($siswa); $i++) { 
        $total += $siswa[$i][1];
    }
    $rerata = $total / count($siswa);
    echo "<h3> Rata-rata umur siswa: $rerata Tahun </h3>";
    ?>
    </div>
</body>
</html>