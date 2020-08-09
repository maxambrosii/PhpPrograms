<?php

echo "<script>
function WClose(){
    window.close();
 }
</script>";

echo "<form method='post' target='_blank' action='Main.php'>
<input onclick = 'WClose()' type = 'submit' value = 'Назад' name = 'view'  target='_blank'>
</form>";


function viewStudents(){
    
    $StudentsAr = @file("Students.txt");

    echo "<table border = '2px'>";
    echo "<tr>". "<th>ФИО Студента</th> 
    <th>Группа</th>
    <th>Профиль</th>
    <th>Пол</th>
    <th>Год рождения</th>
    <th>Иностранный язык</th>
    <th>Экзамен 'Русс. яз.'</th>
    <th>Экзамен 'Математика'</th>
    <th>Экзамен 'Иностранный яз.'</th>
    <th>Экзамен 'Информатика'</th>"."</tr>";
    
    for($i = 0; $i < count($StudentsAr); $i++){

    $student = explode(" ", $StudentsAr[$i]);
   
        echo "<tr>". "<td>". $student[0]." ". $student[1]. " " . $student[2]."</td>";
        
        for ($j = 3; $j < count($student); $j++) { 
            echo "<td>".$student[$j]."</td>";   
        }
        echo "</tr>";
    }

echo "</table>"."<hr>";
  
}

viewStudents();
?>