<?php
 echo ' 3 - Fazer um programa que sorteie e exiba um dos estados do Brasil
 <hr size = 3 width = 80% align = left color = black>';
 $estado[1] = 'Acre';
 $estado[2] = 'Alagoas';
 $estado[3] = 'Amap&aacute;';
 $estado[4] = 'Amazonas';
 $estado[5] = 'Bahia';
 $estado[6] = 'Cear&aacute;';
 $estado[7] = 'Distrito Federal';
 $estado[8] = 'Esp&iacute;rito Santo';
 $estado[9] = 'Goi&aacute;s';
 $estado[10] = 'Maranh&atilde;o';
 $estado[11] = 'Mato Grosso';
 $estado[12] = 'Mato Grosso do Sul';
 $estado[13] = 'Minas Gerais';
 $estado[14] = 'Par&aacute;';
 $estado[15] = 'Para&iacute;ba';
 $estado[16] = 'Paran&aacute;';
 $estado[17] = 'Pernambuco';
 $estado[18] = 'Piau&iacute;';
 $estado[19] = 'Rio de Janeiro';
 $estado[20] = 'Rio Grande do Norte';
 $estado[21] = 'Rio Grande do Sul';
 $estado[22] = 'Rond&ocirc;nia';
 $estado[23] = 'Roraima';
 $estado[24] = 'Santa Catarina';
 $estado[25] = 'S&atilde;o Paulo';
 $estado[26] = 'Sergipe';
 $estado[27] = 'Tocantins';
 $num = rand(1,27);
 echo'<font size = 5 color = red>';
 echo $estado[$num];
 echo'</font>';

?>