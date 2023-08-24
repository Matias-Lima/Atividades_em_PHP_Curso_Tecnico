 <?php
  echo'
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
      <div class="conteudo"> ';

      $al = $_POST["alcool"];
      $gas = $_POST["gasolina"];
      if(($al/$gas) > 0.70){
           echo 'Use Gasolina';
         }
         else{
           echo 'Use Etanol';
         }


echo'
  </div></div></div></center>
</BODY>
</HTML>';
 ?>