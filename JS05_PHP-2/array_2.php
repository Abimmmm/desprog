<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        echo "Nama : {$Dosen ['nama']} <br>";
        echo "Domisili : {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
        
        echo "<table>";
        echo "<tr><th>Atribut</th><th>Nilai</th></tr>";
        echo "<tr><td>Nama</td><td>" . $Dosen["nama"] . "</td></tr>";
        echo "<tr><td>Umur</td><td>" . $Dosen["domisili"] . "</td></tr>";
        echo "<tr><td>Kota</td><td>" . $Dosen["jenis_kelamin"] . "</td></tr>";
        echo "</table>";
    ?>
</body>
</html>