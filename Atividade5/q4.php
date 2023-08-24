<?php

// Tabela
		 echo"<table border=3>";
		 echo"<th colspan=10 bgcolor = blue >Time do Sport</th>";
		 
		 $fp = fopen("lista.txt","r"); 	//enquanto não for o final do arquivo, vá colocando o conteúdo dentro da variável linha 
		 while(!feof($fp)){            	//comando responsável por executar a ação
			 $linha = fgets($fp);
			 @$posicao = $posicao + 1;	// enquanto a linha for diferente de vazio,ou seja, enquanto não for o final, adicione linha ao vetor
		 if($linha != ""){
			 $vetor[$posicao] = $linha;
		  }}//while

			$escolha = rand(1,$posicao -1);		 
                for($i = 1; $i<$posicao; $i++):
				  if($escolha == $i){
						echo"<tr><td bgcolor =red>$i</td><td bgcolor =red>".$vetor[$i]."</td></tr>";
				  }else
				   {
					echo"<tr><td>$i</td><td>".$vetor[$i]."</td></tr>";
				   }
                endfor;
		  fclose($fp);
		            echo"</table>";
   
?>
