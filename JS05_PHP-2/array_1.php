<!DOCTYPE html>
<head>
    

</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen =["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraga"];

        echo $Listdosen[2] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo $Listdosen[1] . "<br>";

        for ($i=0; $i < count($Listdosen); $i++) { 
            echo ($i + 1) . ". " . $Listdosen[$i] . "<br>";
        }
    ?>
</body>
</html>