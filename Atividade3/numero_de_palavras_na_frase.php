<?php
 echo '
   <html>
    <head>
      <title>N&uacute;mero de palavras na frase</title>
    </head>
    <body>
       2 - Fazer um programa que leia uma frase qualquer e informe a quantidade de palavras.<br>
       <hr size = 3 width = 80% align = left color = black>
       <form method="POST" action="http://localhost/A/Atividade3/numero_de_palavras_na_frase.php">
          <p>
            Frase: <input type="text" name="frases" size="50">
            <input type="SUBMIT" value="Enviar" name="B1">
          </p>
       </form>';
 @$frase = $_POST['frases'];
 // função conta a quantidade de letras na variável. 
 $tamanho = strlen($frase);
 $Numero_de_palavras = 0;
 for( $i = 0; $i<= $tamanho; $i++){
	 //Essa função percorre cada elemento da variavel  e se for o final da palavra ele vai adicionar mais 1 em $Numero_de_palavras
    if(substr($frase,$i,1) == ' '){
      $Numero_de_palavras++;
    }
 }
 $Numero_de_palavras++;
	 print 'Frase original - '.$frase.'<br>';
	 print 'N&uacute;mero de palavras - '.$Numero_de_palavras;
	 echo'</body> </html>';
?>