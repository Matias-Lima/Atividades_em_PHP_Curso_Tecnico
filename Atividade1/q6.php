<?php
  $impar = 0;$par =0;
  for($i = 0; $i<=10; $i++){
      $num = rand(1,100);
      if($num % 2 == 0){
         $par++;
      }
      else
      {
         if($num < 50){$impar = $impar + $num;}
      }
  }
  print "Quantidade de n&uacute;meros pares = $par<br>";
  print "Soma dos &iacute;mpares = $impar<br>";
?>
