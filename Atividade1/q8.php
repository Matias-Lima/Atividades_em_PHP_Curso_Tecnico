<?php
  for($i = 1; $i<=10; $i++){$num[$i] = rand(1,100);}
  print '| ';
  for($i = 1; $i<=10; $i++):
     print $num[$i].' | ';
  endfor;
  //Bolha
  $fim = 10;
  do{
    $trocou = false;
    for($i = 1; $i<= ($fim - 1); $i++):
       if($num[$i] > $num[$i+1]):
          $temp = $num[$i];
          $num[$i] = $num[$i+1];
          $num[$i+1] = $temp;
          $trocou = true;
       endif;
    endfor;
    $fim = $fim - 1;
  }while($trocou);
  print '<hr size = 3 color = black>';
  print '| ';
  for($i = 1; $i<=10; $i++){
     print $num[$i].' | ';
  }
?>