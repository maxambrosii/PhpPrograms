<?php

echo "<script>
function WClose(){
    window.close();
 }
</script>";

echo "<form method='post' target='_blank' action='Main.php'>
<input onclick = 'WClose()' type = 'submit' value = 'Назад' name = 'view'  target='_blank'>
</form>";

echo "<form method='post'>
    Введите ФИО ученика которого нужно удалить: <input action='' type = 'text' name = 'delName'> <h5 style = 'color: red;'>*Английскими буквами</h5> 
    <input  type = 'submit' value = 'Удалить' name = 'deleteS' >
</form>";




function del($id){
   
    if($id !== ""){

        
    
        $file = file("Students.txt");
    
        $fp = fopen("Students.txt","w");
    
        for($i=0;$i<sizeof($file);$i++) {
            if ($i==$id) {
                unset($file[$i]);
            }
        }
    
        fputs($fp,implode("",$file));
    
        fclose($fp);
        echo " Успешно удален!";
    } else echo "Такого студента нет!";
   
}

function deleteStudent(){
    
    $id = "";

    $delStudent = explode(" ", $_POST['delName']); 
   
    if(count($delStudent) == 3){
        
        $StudentsAr = @file("Students.txt");
        
            for($i = 0; $i < count($StudentsAr); $i++){

                $student = explode(" ", $StudentsAr[$i]);    
        
                if(!strcmp($delStudent[0],$student[0]) && !strcmp($delStudent[1],$student[1]) && !strcmp($delStudent[2],$student[2])) {
              
                $id = $i;
                echo "Студент с ФИО \"".$delStudent[0]." ".$delStudent[1]." ".$delStudent[2]."\" ";
                }
                
            }
    } else $id = "";

    del($id);
    
}

if(isset($_POST['deleteS'])){
    
     deleteStudent();
   
}




?>