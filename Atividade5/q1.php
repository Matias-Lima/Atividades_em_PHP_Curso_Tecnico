<html>
  <head>
    
<style>
            .conteudo {
             	width:360px;
              	/*height:275px;*/
               	border:4px solid black;
               	background:white;
               	vertical-align: middle;
              	}

             .moldura-dois {
               	width: 368px;
                border:4px inset black;
                padding:15px;
                background:blue;
                }

             .moldura-um {
             	width: 404px; /*358+8+8(bordas)+15+15(paddings)*/
              	border:8px inset black;
               	padding:25px;
                background:red;

                }
                form{
                    font-size:"25px";
                }
</style>
</head>
<body>
  <center><div class="moldura-um">
    <div class="moldura-dois">
      <div class="conteudo">
<form method="POST" action="http://localhost/A/Atividade5/q1.php">
    <?php
		         echo"      Nome: <input type= text name= nome size=10><br> ";   
		         echo" Sobrenome: <input type= text name= sobrename size=10><br> ";   
		         echo"     Email: <input type= text name= email size=10><br> ";   	   
	?>
	 <input type="SUBMIT" value="Enviar" name="B1">
  </div></div></div></center></form>
  
 <?php
 for($i = 1; $i<=2; $i++){
		@$nome = $_POST ["nome"];
		@$sobren = $_POST ["sobrename"];
		@$email = $_POST ["email"];
}
// ------------------- 1 ----------------
// Testando o Email
$tamanho = strlen($email);
$t = true;
 for( $i = 0; $i<= $tamanho; $i++){
    if((substr($email,$i,1) == ' ') || (substr($email,$tamanho - 1 ,1) == '@'))
	{
     @$emailver ="Este email não é valido.";
	 $t = false;
    }
 } 
 echo @$emailver;
 // Guardando os Dados
if($t == true){
$dados = fopen("arq.txt","a");
$teste = fwrite($dados,"\r\n");
$teste1 = fwrite($dados,"Nome: $nome Email: $email");
fflush($dados);
fclose($dados);
 }else{
     echo"<br>Esse dados não podem ser armazenados.";
 }
?>




</body>
</html>