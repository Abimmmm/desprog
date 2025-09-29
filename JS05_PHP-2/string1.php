<?php

$LoremIpsum = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit rerum reiciendis maiores qui perferendis cupiditate non voluptatibus provident veritatis quos consequuntur a praesentium pariatur molestiae suscipit, corrupti vero porro nobis autem doloremque laborum. Dolores, laborum? Eum enim optio adipisci deleniti.";

echo "<p>{$LoremIpsum}</p>";
echo "Panjang Karakter : " . strlen($LoremIpsum) . "<br>";
echo "Panjang kata : " . str_word_count($LoremIpsum) . "<br>";
echo "<p>" . strtoupper($LoremIpsum) . "</p>";
echo "<p>" . strtolower($LoremIpsum) . "</p>";

?>