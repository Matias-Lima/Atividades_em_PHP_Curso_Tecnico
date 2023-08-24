 <?php
 // Formulário
echo"<form method=POST action=http://localhost/A/Atividade6/q2.php>";
             echo "Qual foi a sua nota: <input type=name name=nota size=10><br>";
             echo "Qual foi a sua frequencia: <input type=name name=frequencia size=10><br>";
             echo "Qual foi a nota do exame: <input type=name name=exame size=10><br>";
			 echo"<input type=SUBMIT value=Enviar name=B1>";
echo"</form>";

@$nota = $_POST ["nota"];
@$frequencia = $_POST ["frequencia"];
@$exame = $_POST ["exame"];

function situacao($nota,$frequencia,$exame = ""){
// if para verificação dos dados
if(($nota >= 7 and $nota <= 10) and ($frequencia >= 0.75 and $frequencia <= 1)){
	echo"foi aprovado";
}elseif(($nota < 7 and $nota >= 0) and ($frequencia < 0.75 and $frequencia >= 0) or ($exame < 5 and $frequencia >= 0)){
	echo"foi reprovado";
}else{
	echo"Erro";
}}

echo"Voce: ";
situacao($nota,$frequencia,$exame);
echo"<br><br>";

echo"Ana: "; 
situacao(10,0.8);
echo"<br><br>";



echo"Maria: ";
situacao(4.0,0.9,3);
echo"<br><br>";
?>




