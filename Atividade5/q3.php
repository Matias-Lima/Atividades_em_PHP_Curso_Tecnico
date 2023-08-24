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
                form{
                    font-size:"25px";
                }
</style>
</head>
<body>
  <center>
    <div class="moldura-dois">
    <div class="conteudo">
<form method="POST" action="http://localhost/A/Atividade5/q3.php">
		              Escreva a Mensagem que ira ser criptografada: <input type= text name= men><br>	   
	 <input type="SUBMIT" value="Enviar" name="B1"> <input type="reset" value="Limpar" name="limpar">
    </div></div></center></form>
 <?php
@$string = $_POST ["men"];
$algoritmo = "AES-256-CBC";
$chave = "senha";
$iv = "wNYtCnelXfOa6uiJ";
$mensagem = openssl_encrypt($string, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
				echo "Essa é a mensagem  criptografada: ".base64_encode($mensagem);
				echo "<br><br><br>Essa é a mensagem nao criptografada: $string ";
				echo"</body>";
				echo"</html>";

?>