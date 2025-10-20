<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt","pdf","doc","docx");
    $maxsize = 5*1024*1024;
    if (in_array($fileType, $allowedExtensions)&& $_FILES["myfile"]["size"]<=$maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            echo "File berhasil diunggah" ;
            echo "<img src='$target_file' width='200'>";
        } else {
            echo "gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>
