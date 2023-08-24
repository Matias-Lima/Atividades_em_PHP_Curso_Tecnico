<?php
echo"<form method=POST action=http://localhost/A/Atividade6/q1.php>";
             echo "Qual e a sua altura: <input type=name name=altura size=10><br>";
			 echo"<fieldset><legend>Sexo</legend>";
             echo" <input type=radio value =1 name =sexo id = masc>";
			 echo"<label for =masc> Masculino </label><br>";
             echo"<input type=radio value = 2 name =sexo id =fem>";
			 echo"<label for =fem> Feminino </label>";
			 echo"<br><br>";
			  echo"<input type=SUBMIT value=Enviar name=B1>";
			 echo"</fieldset><br>";
           
		echo"</form>";
@$altura = $_POST ["altura"];
@$tipo = $_POST ["sexo"];

 switch($tipo){
	 
	case 1:
   @$res = ($altura * 62.1) - 44.7;
    break;	
	case 2:
   @$res = ($altura * 72.2) - 58;   
    break;	
 } 
print"O seu peso ideal é: ".@$res." Kg";
?>





