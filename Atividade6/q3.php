 <?php
//Array com os valores
 $meninos["Felipe"] =1.45;
 $meninas["Mariana"] = 1.67;
 $meninos["Ricardo"] = 1.52;
 $meninas["Flora"] = 1.32;
 $meninos["Josue"] = 1.57;
 $meninas["Judith"] = 1.39;
 $meninos["Henrique"] = 1.47;
 $meninas["Maria"] = 1.53;
 //meninos
   echo"<center><h2>Homens</h2></center>";
 // essa função está colocando os valores do array nas variáveis $nome e $altura.
	   foreach ($meninos as $nome => $altura) {
	   @$i = $i + 1;
	   $vetornome[$i]=$nome;
	   $vetoraltura[$i]=$altura;
   echo"<center>";
   echo"$nome :";
   echo"$altura<br>";
   echo"</center>";
}
 //Bolha para ordenar as idade dos meninos 
    $fim = 4;
    do{
    $trocou = false;
    for($i = 1; $i<= ($fim - 1); $i++):
       if($vetoraltura[$i] > $vetoraltura[$i+1]):
          $tempnome = $vetornome[$i];
		  $tempano = $vetoraltura[$i];
          $vetornome[$i] = $vetornome[$i+1];
		  $vetoraltura[$i]= $vetoraltura[$i+1];
          $vetornome[$i+1] = $tempnome;
		  $vetoraltura[$i+1] = $tempano;
          $trocou = true;
       endif;
    endfor;
    $fim = $fim - 1;
   }while($trocou);
// vetor nome e vetor altura já estão ordenados

//-----------------------------------------------------------
  //meninas
    echo"<center><h2>Mulheres</h2></center>";
	   foreach ($meninas as $anome => $aaltura) {
	   @$a = $a + 1;
	   $avetornome[$a]=$anome;
	   $avetoraltura[$a]=$aaltura;
	echo"<center>";
	echo"$anome :";
	echo" $aaltura<br>";
	echo"</center>";
}
$fim = 4;
    do{
    $trocou = false;
    for($i = 1; $i<= ($fim - 1); $i++):
       if($avetoraltura[$i] > $avetoraltura[$i+1]):
          $tempnome = $avetornome[$i];
		  $tempano = $avetoraltura[$i];
          $avetornome[$i] = $avetornome[$i+1];
		  $avetoraltura[$i]= $avetoraltura[$i+1];
          $avetornome[$i+1] = $tempnome;
		  $avetoraltura[$i+1] = $tempano;
          $trocou = true;
       endif;
    endfor;
    $fim = $fim - 1;
  }while($trocou);
// vetor nome e vetor altura já estão ordenados

// tabela para mostrar os casais 
 print '<br><center><table border = 2>
 <tr>
 <th colspan = 3 bgcolor = red> Casais Ordenados </th>
 </tr> 
 <tr>
 <td>Casal</td><td>Nomes</td>
 </tr>';
  for($i = 1; $i <=4; $i++)
  {
		echo "<tr>";
		echo "<td>".$i."</td><td>".$vetornome[$i]." & ".$avetornome[$i]."</td>";
		echo "</tr>";
  }
 print '</table></center>';	
  ?>