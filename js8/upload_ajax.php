<?php
if (isset($_FILES['file'])) {
    $errors = array();
    
    if (is_array($_FILES['file']['name'])) {
        // Multiple files
        $file_count = count($_FILES['file']['name']);
        
        for ($i = 0; $i < $file_count; $i++) {
            $file_name = $_FILES['file']['name'][$i];
            $file_size = $_FILES['file']['size'][$i];
            $file_tmp = $_FILES['file']['tmp_name'][$i];
            $file_type = $_FILES['file']['type'][$i];
            
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $extensions = array("jpg", "jpeg", "png", "gif");

            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "File $file_name: Ekstensi yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
                continue;
            }

            if ($file_size > 2097152) {
                $errors[] = "File $file_name: Ukuran file tidak boleh lebih dari 2 MB";
                continue;
            }

            if (empty($errors)) {
                move_uploaded_file($file_tmp, "documents/" . $file_name);
                echo "File $file_name berhasil diunggah.<br>";
            }
        }
    } else {
        // Single file
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File berhasil diunggah.";
        }
    }
    
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>