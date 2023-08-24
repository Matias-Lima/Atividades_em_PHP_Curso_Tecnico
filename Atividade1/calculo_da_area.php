<HTML>
 <HEAD>
  <TITLE>&Aacute;rea da figura</TITLE>
 </HEAD>
 <BODY>
  <?php
   $area = $_POST["A"];
   If($area == "Quadrado"){
      $base = $_POST["Base"];
      $resp = $base * $base;
      echo "A &aacute;rea do quadrado &eacute; <font color = blue>$resp</font>" ;
   }
   else if ($area == "triangulo"){
      $base = $_POST["Base"];
      $altura = $_POST["Altura"];
      $resp = $base * $altura/2;
      echo "A &aacute;rea do tri&acirc;ngulo &eacute; <font color = blue>$resp</font>";
   }
   else {
      $raio = $_POST["Raio"];
      $resp = $raio * $raio * 3.14;
      echo"A &aacute;rea do circulo &eacute; <font color = blue>$resp</font>" ;

   }
 

  ?>
 </BODY>
</HTML>