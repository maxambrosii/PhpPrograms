<?php

echo "<h1>First</h1>";
echo "<hr>";
$fp = fopen("files/FirstFile.txt", "w");
$fp = fopen("files/FirstFile.txt", "r+"); 

$mytext = '';

 
	for($i='a'; $i !='aa'; $i++){
		$mytext .= $i. strtoupper($i). "\n";
	}

	
echo $mytext;
$test = fwrite($fp, $mytext); 
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp); 

echo "<hr>";


?>