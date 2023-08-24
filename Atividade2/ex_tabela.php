<?php
   echo'<table border = 2>';
   echo'<tr><th colspan = 10>N&uacute;mero</th></tr>';
   for($linha = 1; $linha <=16; $linha++):
      echo'<tr>';
      for($coluna = 1; $coluna <=10; $coluna++):
         $num = rand(1,99);
         if($num % 2 == 0){
            if($num < 10){
              echo"<td bgcolor = #FFFF00>0$num</td>";
            }
            else
            {
              echo"<td bgcolor = #FFFF00>$num</td>";
            }
           }
         else
         {
           if($num < 10){
             echo"<td bgcolor = #00FF00>0$num</td>";
           }
           else
           {
            echo"<td bgcolor = #00FF00>$num</td>";
           }
         }
      endfor;
      echo'</tr>';
   endfor;
   echo'</table>';
?>
