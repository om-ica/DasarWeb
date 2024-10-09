<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas List Data Siswa</title>
</head>
<body>
    <h1>Data Mahasiswa Array Multidimensi</h1>
    
    <?php 
        $listMahasiswa = array (
            array("Celine", 2310724029, "Fakultas Kedokteran Gigi", "kucingCeline@gmail.com"),
            array("Ica", 2341720193, "Teknik Informatika", "omica@gmail.com"),
            array("Septian", 2382760801, "Teknik Listrik", "septian@gmail.com"),
            array("Aruna", 23210930001, "Pendidikan Bahasa Indonesia", "aruna@gmail.com")
        );

        echo "<ul>";
        foreach ($listMahasiswa as $mahasiswa) {
            echo "<li>Nama : " . $mahasiswa[0] . "</li>";
            echo "<li>NIM : " . $mahasiswa[1] . "</li>";
            echo "<li>Jurusan : " . $mahasiswa[2] . "</li>";
            echo "<li>Email : " . $mahasiswa[3] . "</li> <br>";
        }
        echo "</ul>";
    ?>
</body>
</html>