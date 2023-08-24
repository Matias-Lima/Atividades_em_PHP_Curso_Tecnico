<?php
 echo '
   4 - Fazer um programa que calcule a m&eacute;dia ponderada dos elementos de
   um array de dez posi&ccedil;&ouml;es, preenchidos com n&uacute;meros interior
    aleat&oacute;rios. O peso da m&eacute;dia segue o seguinte padr&atilde;o:<br>
   a. N&uacute;meros em espa&ccedil;os cujo &iacute;ndice &eacute; par tem peso 2 <br>
   b. N&uacute;meros em espa&ccedil;os cujo &iacute;ndice &eacute; &iacute;mpar tem peso 3<br>

   <hr size = 4 align = left color = black width = 80%>';
   $soma = $peso = 0;
   for($num = 1; $num < 10; $num++):
      $vetor[$num] = rand(2,40);
      if($num % 2 == 0){
        $soma = $soma + $vetor[$num]  * 2;
        $peso = $peso + 2;
      }else{
        $soma = $soma + $vetor[$num]  * 3;
        $peso = $peso + 3;
      }
   endfor;
   echo'<table border = 2 bordercolor = black><tr>';
   for($num = 1; $num < 10; $num++):
      echo"<td>$vetor[$num]</td>";
   endfor;
   echo'</tr></table>';
   echo'M&eacute;dia = ';
   echo $soma/$peso;
?>