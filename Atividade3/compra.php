<?php
  echo '
   <html>
    <head>
      <title>N&uacute;mero de palavras na frase</title>
    </head>
    <body>
       5 - Neste tempo de pandemia, o n&uacute;mero de compras on-line aumentou exponencialmente.
           Sendo assim, diversas lojas est&atilde;o necessitando atualizar seu sistema de vendas. Para isso, lhe
           contratou como desenvolvedor da loja XYZ. <br>Essa loja vende eletr&ocirc;nicos, livros e roupas. As
           vendas poder&atilde;o ser realizadas utilizando tr&ecirc;s op&ccedil;&otilde;es de pagamento conforme abaixo:<br>
           a. Pagamento a vista: desconto de 10% no valor da compra<br>
           b. Pagamento com prazo de 30 dias: acr&eacute;scimo de 4% no valor da compra<br>
           c. Pagamento com prazo de 60 dias: acr&ecirc;scimo de 9,38% no valor da compra<br>
           <br><br>
           Desenvolva um sistema que calcule quanto o cliente ir&aacute; pagar em uma compra.<br>
       <hr size = 3 width = 80% align = left color = black>
       <form method="POST" action="http://localhost/A/Atividade3/compra.php">
             Informe o valor da compra: <input type="text" name="compra" size="10"><br>
             Selecione a op&ccedil;&atilde;o de pagamento:<br>
             Pagamento a vista: <input type=radio value = 0 name = pagamento><br>
             Pagamento com prazo de 30 dias: <input type=radio value = 30 name = pagamento><br>
             Pagamento com prazo de 60 dias: <input type=radio value = 60 name = pagamento><br><br>
            <input type="SUBMIT" value="Enviar" name="B1">
       </form>';
 @$pagar = $_POST['pagamento'];
 @$valor = $_POST['compra'];
 echo'<font size = 5 color = red>';
 if($pagar == 0){
   echo "Pagamento = R$";
   echo $valor - $valor * 10 /100;
 }
 else if($pagar == 30){
   echo "Pagamento = R$";
   echo $valor + $valor * 4 /100;
 }
 else{
   echo "Pagamento = R$";
   echo $valor + $valor * 9.38 /100;
 }

 echo'</font></body> </html>';
?>