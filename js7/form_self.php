<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    // Inisialisasi variabel
    $nameErr = "";
    $name = "";
    
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi name (contoh: pastikan name tidak kosong)
        if (empty($_POST["name"])) {
            $nameErr = "Nama harus diisi!";
        } else {
            $name = $_POST["name"];
            echo "Data berhasil disimpan!";
        }
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>