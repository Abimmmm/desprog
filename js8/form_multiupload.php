<!DOCTYPE html>
<html>
<head>
    <title>Multi Upload File</title>
</head>
<body>
    <h2>Unggah dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        Pilih beberapa file: <br>
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
        <input type="submit" value="Unggah" name="submit">
    </form>
</body>
</html>
