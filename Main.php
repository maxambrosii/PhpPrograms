<?php

echo "<script>
        function WClose(){
            window.close();
         }
      </script>";



echo "<form method='post' target='_blank' action='ViewStudent.php'>
<input onclick = 'WClose()' type = 'submit' value = 'Показать' name = 'view'  target='_blank' data-dismiss='modal'>
</form>";

echo "<form method='post' target='_blank' action='addStudent.php'>
<input onclick = 'WClose()' type = 'submit' value = 'Добавить' name = 'add'>
</form>";

echo "<form method='post' target='_blank' action='deleteStudent.php'>
<input onclick = 'WClose()' type = 'submit' value = 'Удалить' name = 'delete'>
</form>";


?>