<?php

echo "<h1>Third</h1>";
echo "<hr>";

$handle = fopen("files/Third.txt", "r");

while (!feof($handle)) {
    $buffer = fgets($handle, 256);
    if(strlen($buffer) <= 30) echo $buffer;
}

fclose($handle);

echo "<hr>";


?>