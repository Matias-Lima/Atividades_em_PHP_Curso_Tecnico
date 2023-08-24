<HTML>
<HEAD>
 <TITLE>Atividade</TITLE>
 <style type="text/css">
 <!--
   .conteudo {
             	width:360px;
              	/*height:275px;*/
               	border:4px solid #909090;
               	background:#C0FFC0;
               	vertical-align: middle;
              	}

             .moldura-dois {
               	width: 368px;
                border:4px inset #663300;
                padding:15px;
                background: #000000;
                }

             .moldura-um {
             	width: 404px; /*358+8+8(bordas)+15+15(paddings)*/
              	border:8px inset #2F1700;
               	padding:25px;
                background: #00FF00;

                }
                form{
                    font-size:"22px";
                }
 -->
 </style>
</HEAD>
<BODY bgcolor = "#808000" background = "combustivel.jpg">
  <center><div class="moldura-um">
    <div class="moldura-dois">
      <div class="conteudo">
     <form action = "http://localhost/A/Atividade1/combustivel_2.php" method = "post"><BR>
               &nbsp;&nbsp;&nbsp;Digite o valor do etanol:&nbsp;&nbsp;&nbsp;
               <input type = "text" name = "alcool" size = "5"><BR>
               &nbsp;&nbsp;&nbsp;Digite o valor da gasolina:
               <input type = "text" name = "gasolina" size = "5"><BR><BR>
               <?php for($i = 1; $i < 55; $i++){ echo '&nbsp;';} ?>

               <input type="submit" value="Enviar"><BR>
               <BR>
         </form>



  </div></div></div></center>
</BODY>
</HTML>