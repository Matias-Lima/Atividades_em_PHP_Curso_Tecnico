<?php
  //Gerando Número
    echo'<table border = 2><tr><td colspan = 2 align = center bgcolor = white>Q1</td></tr>';
   $num = rand(1,100);
        echo '<tr><td><font color = red>O n&uacute;mero escolhido</font></td>';
        echo "<td>      <font color = red size = 6> $num<br></td></tr><tr>";
        echo '<td colspan = 2 bgcolor = white align = center>';
	$resposta = ($num % 2 == 0)? "PAR":"IMPAR";
  
            echo "O n&uacute;mero &eacute $resposta ";
        echo '</font> </td></tr></table>';
?>
