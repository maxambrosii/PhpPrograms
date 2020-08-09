<?php
echo '<link rel="stylesheet" href="style.css">';
echo "<script>
function WClose(){
    window.close();
 }
</script>";

echo "<form method='post' target='_blank' action='Main.php'>
<input onclick = 'WClose()'  type = 'submit' value = 'Назад' name = 'view'  target='_blank'>
</form>";


function formS(){
    
    
    echo "<option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>"
    ;
}

echo "<form method = 'post' class='transparent'>
<div class = 'form-inner'>
<h3>Добавление</h3>
Фамилия: <input type = 'text' name = 'NameSt' pattern = '^[a-zA-Z]+$'><br><br>
Имя: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type = 'text' name = 'PreNameSt' pattern = '^[a-zA-Z]+$'><br><br>
Отчество: <input type = 'text' name = 'OtNameSt' pattern = '^[a-zA-Z]+$'><br><br>
Группа: <input type = 'text' name = 'Gruppa'><br><br>
Пол: <select name = 'selectP'>
<option>masculin</option>
<option>feminin</option>
</select><br><br>
Год рождения: <input type = 'text' name = 'God' pattern = '[0-9]{4}'><br><br>
Иностранный язык:<input type = 'text' name = 'Iazik' pattern = '^[a-zA-Z]+$'><br><br>
<h3>Экзамены: </h3>
Русский язык:<select name = 'Rus'>";
formS();
echo " </select><br><br>
Математика:<select name = 'matem'>";
formS();
echo "
</select><br><br>
Иностранный язык:<select name = 'InZ'>";
formS();
echo "
</select><br><br>
Информатика:<select name = 'Infa'>";
formS(); 
echo "
</select><br><br>
<input type = 'submit' value = 'Добавить'>
</div>
</form>
";


if (trim($_POST['NameSt']) === ''){
    echo "<script> alert('Name is empty')</script>;";
}
else 
if (trim($_POST['OtNameSt']) === ''){
    echo "<script> alert('Otcestvo is empty')</script>;";
}
else 
if (trim($_POST['PreNameSt']) === ''){
    echo "<script> alert('PreName is empty')</script>;";
}
else 
if (trim($_POST['Gruppa']) === ''){
    echo "<script> alert('Gruppa is empty')</script>;";
}
else 
if (trim($_POST['God']) === ''){
    echo "<script> alert('God is empty')</script>;";
}else 
if (trim($_POST['Iazik']) === ''){
    echo "<script> alert('Iazik is empty')</script>;";
}
else {

    $student = trim($_POST['NameSt'])." ".trim($_POST['PreNameSt']). " " .trim($_POST['OtNameSt']) .
    " ". trim($_POST['Gruppa'])." " . trim($_POST['selectP'])." " . trim($_POST['God']).
    " " . trim($_POST['Iazik']) ." ". trim($_POST['Rus']) ." ". trim($_POST['matem']).
    " " . trim($_POST['InZ'])." " . trim($_POST['Infa']);    
    $fileopen=fopen("Students.txt", "a+");
    fwrite($fileopen,"\n");
    echo "<script> alert('".$student." Был успешно добавлен!')</script>;";
    fwrite($fileopen,$student);
    fclose($fileopen);

}


?>