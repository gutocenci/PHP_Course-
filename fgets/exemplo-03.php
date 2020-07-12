<?php  

//APENAS PARA APRENDIZADO A MELHOR PRATICA SERIA CONSUMIR UMA API REST AFINAL A TROCA DE UMA TAG OU CLASS NO HTML JA DEMANDA MANUTENCAO 

$url = 'https://www.melhorcambio.com/dolar-hoje';

//OBTENDO TODO O CODIGO FONTE
$filename = file_get_contents($url);

//APOS INSPECIONAR O ELEMENTO QUE CONTEM O VALOR DO DOLAR FAZ O EXPLODE ATE CONSEGUIR O VALOR DESEJADO, NESSE CASO SOMENTE A STRING COM O VALOR DA DOLAR COMERCIAL
$var1 = explode('class="tdvalor"', $filename);
$var2 = explode("</td>", $var1[1]);
$var3 = explode(">", $var2[0]);

echo "<h1>".$var3[1]."</h1>";

?>