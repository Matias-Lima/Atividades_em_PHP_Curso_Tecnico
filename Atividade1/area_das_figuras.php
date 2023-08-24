<html>
  <head>
    <style type="text/css">
      <!--
      p {
         background: #C0C0C0;
         font-size:150%;
        }

       -->
    </style>
  </head>
  <body>
   <form method="POST" action="calculo_da_area.php">
     <table border = 3>
      <tr>
       <td bgcolor = #0000FF align = center>
        <font color = white size = 5><b>Escolha a Figura</b> </font>
       </td>
      </tr>
      <tr>
       <td bgcolor = #C0C0C0>
         <input TYPE=RADIO NAME="A" VALUE="Quadrado">Quadrado
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input TYPE=RADIO NAME="A" VALUE="triangulo">Tri&acirc;ngulo
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input TYPE=RADIO NAME="A" VALUE="Circulo">Circulo
         <hr>
         Base <input type=text name = "Base" size="4">
         Altura<input type=text name = "Altura" size="4">
         Raio<input type=text name = "Raio" size="4">
         <input type="SUBMIT" value="Enviar" name="B1">

      </td>
     </tr>
    </table>
   </form>
  </body>
</html>