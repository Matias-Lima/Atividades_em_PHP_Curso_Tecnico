<?php
   $a = $_POST["lado_a"];
   $b = $_POST["lado_b"];
   $c = $_POST["lado_c"];
   If(($a >= ($b + $c)) || ($b >= ($a + $c)) || ($c >= ($a + $b))){
      echo "<font size = 7> Não forma um triângulo!</font>";
   }
   else
   {
      if(($a == $b) and ($b == $c)){
        echo "<font size = 7> Tri&acirc;ngulo equil&aacute;tero</font>";
      }
      elseif(($a != $b) and ($b != $c) and ($a != $c) ){
        echo "<font size = 7> Tri&acirc;ngulo escaleno</font>" ;
      }
      else
      {
        echo "<font size = 7> Triângulo  isósceles</font>";
      }
   }
?>