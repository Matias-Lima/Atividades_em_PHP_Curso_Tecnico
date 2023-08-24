<?php
	/*
	[A] Gere um array com trinta elementos preenchidos de forma aleatória com números
	inteiros entre 10 e 99.
	*/
	  for($i = 1; $i<=30; $i++):
	  {$num[$i] = rand(10,99);}
	  {$parimpar[$i] = $num[$i];}
	  endfor;
  
 /* b) Exiba o array gerado  */
  print '[B]<br>  Exiba o array gerado<br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 30 bgcolor = red> Array </th></tr>';
  echo "<tr>";
  for($i = 1; $i <=30; $i++){
		echo "<td>".$num[$i]."</td>";}
		echo "</tr>";
  print '</table>';  
  /*c) Exiba o array gerado ordenado*/
  //Bolha
    $fim = 30;
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
  //Fim da Bolha
  
  //Mostrar Números ordenados
  print '<br>[C]<br> Exiba o array gerado ordenado<br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 30 bgcolor = red> Array Ordenado </th></tr>';
  echo "<tr>";
  for($i = 1; $i <=30; $i++){
		echo "<td>".$num[$i]."</td>";}
		echo "</tr>";
  print '</table>';
 
  //d) Exiba um array apenas com os numeros pares gerados
  print '<br>[D]<br>  Exiba um array apenas com os numeros pares gerados <br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 30 bgcolor = red> Array </th></tr>';
  echo "<tr>";
  for($i = 1; $i <=30; $i++){
	  if ($parimpar[$i] % 2 == 0){ 
		echo "<td>".$parimpar[$i]."</td>";
	  }
	  }
		echo "</tr>";
  print '</table>';
 
 //e) Exiba um array apenas com os numeros pares gerados e ordenados
  print '<br>[E]<br>  Exiba um array apenas com os numeros pares gerados e ordenados<br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 30 bgcolor = red> Array </th></tr>';
  echo "<tr>";
  for($i = 1; $i <=30; $i++){
	  if ($num[$i] % 2 == 0){ 
		echo "<td>".$num[$i]."</td>";
	  }
      }
		echo "</tr>";
  print '</table>';
 
  //f) Exiba um array apenas com os numeros impares gerados
  print '<br>[F]<br>  Exiba um array apenas com os numeros pares gerados <br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 30 bgcolor = red> Array </th></tr>';
  echo "<tr>";
  for($i = 1; $i <=30; $i++){
	  if ($parimpar[$i] % 2 <> 0){ 
		echo "<td>".$parimpar[$i]."</td>";
	  }
      }
		echo "</tr>";
  print '</table>';
 
 //g) Exiba um array apenas com os numeros impares gerados e ordenados
  print '<br>[G]<br>  Exiba um array apenas com os numeros pares gerados e ordenados<br><hr size = 3 color = black>';
  print '<table border = 2><tr><th colspan = 30 bgcolor = red> Array </th></tr>';
  echo "<tr>";
  for($i = 1; $i <=30; $i++){
	  if ($num[$i] % 2 <> 0){ 
		echo "<td>".$num[$i]."</td>";
	  }
	  }
		echo "</tr>";
  print '</table>'; 
?>