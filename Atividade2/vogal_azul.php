<?php
  $frase = $_POST["frases"];
  $tamanho = strlen($frase);
  $saida = '';
  $letra= '';
  for($i = 0; $i <= $tamanho; $i++){
     $letra = substr($frase,$i,1);
     if(($letra == 'a') || ($letra == 'e') || ($letra == 'i') or ($letra == 'o') or ($letra == 'u')){
       $saida = $saida.'<font color = blue>'.$letra.'</font>';
     }
     else
     { $saida = $saida.$letra;}
  }
  print "Frase =  $saida";
?>