<?php 
    if (isset($_POST["submit"])) {
        $targetDir = "uploads/"; // Direktori tujuan untuk menyimpan file
        $targetFile = $targetDir . basename($_FILES["myfile"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtension = array("txt", "pdf", "doc", "docx");
        $maxSize = 3*1024*1024;

        if (in_array($fileType, $allowedExtension) && $_FILES["myfile"]["size"]<=$maxSize)  {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
                echo "File berhasil diunggah.<br>";
                echo"<img src='$targetFile' width='200' style='height: auto' alt='thumbnail'>";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
        }
    }
?>