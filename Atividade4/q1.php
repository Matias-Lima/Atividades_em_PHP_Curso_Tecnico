<html>
  <head>
    
<style>
</style>
</head>
<body>

<form method="POST" action="http://localhost/A/Atividade4/q1.php">
    <?php
	  for($i = 1; $i<=10; $i++){
		         echo" Nome $i : <input type= text name= nome$i size=10><br> ";   
			     echo" Idade $i : <input type=number name= ano$i> <br>";
				 echo"<fieldset><legend>Sexo</legend>";
				 echo"<input type=radio value =Homem name = sexo$i id = masc>";
				 echo"<label for =masc> Masculino </label><br>";
				 echo"<input type= radio value = Mulher name = sexo$i  id =fem>";
				 echo"<label for =fem> Feminino </label>";
				 echo"</fieldset><br>";	
	 ;}
	?>
	 <input type="SUBMIT" value="Enviar" name="B1">
</form>
 <?php
 for($i = 1; $i<=10; $i++){
	@$nome[$i] = $_POST ["nome$i"];
	@$ano[$i] = $_POST ["ano$i"];
	@$sexo[$i] = $_POST ["sexo$i"];
}
$nvelho = "";
//$ivelho = -1;
$nnova= "";
$inova = 1000;
				for($i = 1; $i<=10; $i++){
				if ($sexo[$i] == "Homem"){
				
				if ($ano[$i]>@$ivelho){
					@$ivelho = $ano[$i];
					@$nvelho = $nome[$i];
				}
				}
				else 
				{
			     if($ano[$i]<$inova){
					@$inova = $ano[$i];
					@$nnova = $nome[$i];	
				}
				}
				@$media = $media + $ano[$i]; 
				}// end do for
				
				//  Letra A
		echo "A Mulher mais nova se chama: $nnova e sua idade é: $inova anos<br><br>";
		        // Letra B
        echo "O Homem  mais velho se chama: ".@$nvelho. " e sua idade é: ".@$ivelho."anos<br><br>";	
				// Letra C
		echo "A media das idade e:".$media/($i -1);
				// Tabela que Mostra os Dados
 print '<table border = 2>
 <tr>
 <th colspan = 3 bgcolor = red> Nomes </th>
 </tr> 
 <tr>
 <td>Nome</td><td>Idade</td><td>Sexo</td>
 </tr>';
  for($i = 1; $i <=10; $i++)
  {
  echo "<tr>";
  echo "<td>".$nome[$i]."</td><td>".$ano[$i]."</td><td>".$sexo[$i]."</td>";
  echo "</tr>";
  }
 print '</table>';	
					// Bolha para Ordenar os Nomes 

 //Bolha
    $fim = 10;
    do{
    $trocou = false;
    for($i = 1; $i<= ($fim - 1); $i++):
       if($nome[$i] > $nome[$i+1]):
          $tempnome = $nome[$i];
		  $tempano = $ano[$i];
		  $tempsexo = $sexo[$i];
          $nome[$i] = $nome[$i+1];
		  $ano[$i] = $ano[$i+1];
		  $sexo[$i] = $sexo[$i+1];
          $nome[$i+1] = $tempnome;
		  $ano[$i+1] = $tempano;
		  $sexo[$i+1] = $tempsexo;
          $trocou = true;
       endif;
    endfor;
    $fim = $fim - 1;
  }while($trocou);
  //Fim da Bolha		
  // Letra D: Tabela que Mostra os Dados ordenados > Nomes
 print '<table border = 2>
 <tr>
 <th colspan = 3 bgcolor = red> Nomes Ordenados </th>
 </tr> 
 <tr>
 <td>Nome</td><td>Idade</td><td>Sexo</td>
 </tr>';
  for($i = 1; $i <=10; $i++)
  {
	  echo "<tr>";
	  echo "<td>".$nome[$i]."</td><td>".$ano[$i]."</td><td>".$sexo[$i]."</td>";
	  echo "</tr>";
  }
 print '</table>';	
 //Bolha das idades
    $fim = 10;
    do{
    $trocou = false;
    for($i = 1; $i<= ($fim - 1); $i++):
       if($ano[$i] > $ano[$i+1]):
          $tempnome = $nome[$i];
		  $tempano = $ano[$i];
		  $tempsexo = $sexo[$i];
          $nome[$i] = $nome[$i+1];
		  $ano[$i] = $ano[$i+1];
		  $sexo[$i] = $sexo[$i+1];
          $nome[$i+1] = $tempnome;
		  $ano[$i+1] = $tempano;
		  $sexo[$i+1] = $tempsexo;
          $trocou = true;
       endif;
    endfor;
    $fim = $fim - 1;
  }while($trocou);
  //Fim da Bolha
  // Letra E: Tabela que Mostra os Dados ordenados > idades
 print '<table border = 2>
 <tr>
 <th colspan = 3 bgcolor = red> Idades Ordenadas </th>
 </tr> 
 <tr>
 <td>Nome</td><td>Idade</td><td>Sexo</td>
 </tr>';
  for($i = 1; $i <=10; $i++)
  {
	  echo "<tr>";
	  echo "<td>".$nome[$i]."</td><td>".$ano[$i]."</td><td>".$sexo[$i]."</td>";
	  echo "</tr>";
  }
 print '</table>';	
?>
</body>
</html>