<HTML>
     <HEAD>
      <TITLE> MEGA RESPOSTA</TITLE>
     </HEAD>
     <BODY>
	 <?php  
	  $npalpites = isset($_POST["num"])? ($_POST["num"]):"Nao possui Valores"
	  ?>
		 <table border="3">
		 <th colspan="10" bgcolor = blue >MEGA SENA</th>
		 <tr>
	 <?php 
		// Cria um array de 1 a 60 
		 $num = range(1,60);
		// Mistura os número
		 shuffle($num);
		 for($i =0; $i<=5; $i++): 
	  ?> 
		<td bgcolor=black>
	 <?php
		// ver se o número é menor que 10
	    if($num[$i] <10){
			echo"<font color = red>0$num[$i]</font>";
			}
		else {
			echo"<font color = red>$num[$i]</font>";
			}        				
 		?> 
		</td>
       <?php endfor;?>
        </tr>
		<!-- Segunda linha da tabela -->
        <?php for($a =  2; $a<=$npalpites; $a++):?>
		 <tr>
		<?php for($X = 0; $X<=5; $X++):?> 
		<td bgcolor=black>
		<?php
		$num = rand(1,60);	
		// ver se o número é menor que 10
		if($num <10){
			echo"<font color = red>0$num</font>";
			}
		else {
			echo"<font color = red>$num</font>";
			 }
 		?>
		</td> 
		<?php endfor;?>
       </tr>
        <?php endfor ?>
    </table>
    </BODY>
   </HTML>