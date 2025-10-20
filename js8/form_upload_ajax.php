<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="upload.css" type="text/css">
    <title>Upload File dokumen</title>
</head>
<body>
    <h2>Upload File AJAX</h2>
    <form id="upload-Form" method="post" action="upload_ajax.php" enctype="multipart/form-data">
        <div class="file-input-container">
            <input type="file" name="file[]" class="file-input" multiple="multiple" id="file"><br><br>
            <label for="file" class="file-label">Pilih file</label>
        </div>
        <button type="submit" name="submit" id="upload-button" class="upload-button" disabled>Unggah</button>
    </form>
    <div id="status" class="upload0-status"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>
