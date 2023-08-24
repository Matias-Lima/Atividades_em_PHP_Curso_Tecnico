<?php
   $a = $_POST["lado_a"];
   $b = $_POST["lado_b"];
   $c = $_POST["lado_c"];
   if(($a>$b) and ( $a>$c)){
      $maior = $a;
      $cat1 = $b;
      $cat2 = $c;
   }
   if(($b>$a) and ( $b>$c)){
      $maior = $b;
      $cat1 = $a;
      $cat2 = $c;
   }
  if(($c>$a) and ( $c>$b)){
      $maior = $c;
      $cat1 = $b;
      $cat2 = $a;
   }
  if(($maior*$maior) == (($cat1 * $cat1) + ($cat2 * $cat2))){
    echo "Triangulo Retangulo";
  }
?>