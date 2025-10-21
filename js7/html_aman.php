<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        echo "Input Anda: $input<br>";
        echo "Email valid: $email";
    } else {
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        echo "Input Anda: $input<br>";
        echo "Email tidak valid: $email";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Aman</title>
</head>
<body>
    <h2>Form HTML Aman</h2>
    <form method="post" action="">
        Input: <input type="text" name="input"><br><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
