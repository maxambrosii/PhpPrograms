<?php

echo "<h1>Second</h1>";
echo "<hr>";
$fp = fopen("files/SecondFile.txt", "w");
$fp = fopen("files/SecondFile.txt", "r+"); 


for ($i = 0; $i < 10; $i++) { 	 	
	for ($j=0; $j < 10; $j++) { 
		$test = fwrite($fp, $i); 
	}
	$test = fwrite($fp, "\n"); 
}


if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp); 

echo "<hr>";


?>