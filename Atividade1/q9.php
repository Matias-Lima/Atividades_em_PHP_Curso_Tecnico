<?php
 print '
   <HTML>
     <HEAD>
       <TITLE>Atividade</TITLE>
     </HEAD>
     <BODY>
        <form method="POST" action="http://localhost/A/Atividade1/q9.php">
            <input type = text size = 5 name = "fatorial">
            <input type="SUBMIT" value="Enviar" name="B1">
        </form>';
 @$fat = $_POST["fatorial"];
 $result = 1;
 for($i = $fat; $i > 0; $i--){
    $result = $result * $i;
 }
 echo "Fatorial = $result";
 print'
     </BODY>
   </HTML>';
?>