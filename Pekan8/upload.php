<?php 
    if (isset($_FILES["file"])) {
        $targetDir = "uploads/"; // Direktori tujuan
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtension = array("txt", "pdf", "doc", "docx");
        $maxSize = 3 * 1024 * 1024; // Ukuran maksimum 3MB

        if (in_array($fileType, $allowedExtension) && $_FILES["file"]["size"] <= $maxSize) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                echo "<br>File berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
?>
