<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";
$allowed = ["jpg", "jpeg", "png", "gif"];

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (in_array($fileType, $allowed)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "Gambar <strong>$fileName</strong> berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar <strong>$fileName</strong>.<br>";
            }
        } else {
            echo "File <strong>$fileName</strong> bukan gambar yang diperbolehkan.<br>";
        }
        // Pindahkan file yang diunggah ke direktori penyimpanan
        // if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
        //     echo "File $fileName berhasil diunggah.<br>";
        // } else {
        //     echo "Gagal mengunggah file $fileName.<br>";
        // }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>