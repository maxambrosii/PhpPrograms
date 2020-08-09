<?php

echo "<h1>Four</h1>";
echo "<hr>";

$handle = fopen("files/Four.txt", "r");

$kB = 0;
$kC = 0;

while (!feof($handle)) {
    $buffer = fgets($handle, 256);
    for ($i = 0; $i < strlen($buffer); $i++) { 
    	if (ctype_alpha($buffer[$i])) $kB++;
    	else if (ctype_digit($buffer[$i])) $kC++;
    }
}

echo "Количество букв в файле: ".$kB."<br>";
echo "Количество цифр в файле: ".$kC;
fclose($handle);

echo "<hr>";


?>