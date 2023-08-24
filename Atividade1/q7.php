<?php
  $impar = 0;$par =0; print '| ';
  for($i = 0; $i<=10; $i++):
      $num = rand(-100,100);

      if($num >= 0){
         echo"<font color = blue>$num</font> | ";
      }
      else
      {
         echo"<font color = red>$num</font>  | ";
      }
  endfor;

?>
