<?php 
    if (isset($_FILES['files'])) {
        $errors = array();
        $extensions = array("jpg", "jpeg", "png", "gif");
        $totalFiles = count($_FILES['files']['name']);

        for ($i=0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $fileSize = $_FILES['files']['size'][$i];
            $fileTmp = $_FILES['files']['tmp_name'][$i];
            $fileType = $_FILES['files']['type'][$i];
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                
            if (in_array($fileExt, $extensions) === false) {
                $errors[] = "Extensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
            }
    
            if ($fileSize > 2097152) {
                $errors[] = 'Ukuran file tidak boleh lebih dari 2MB';
            }
    
            if (empty($errors) == true) {
                move_uploaded_file($fileTmp, "documents/" . $fileName);
                echo "File berhasil diunggah.";
            } else {
                echo implode(" ", $errors);
            }
        }       
    }
?>