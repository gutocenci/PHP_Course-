<?php  

$dataCookie = array(
		'nome'=>"GUSTAVO",
		'date'=>date("D:M:Y"));

//A FUNCAO PARA CRIAR UM COOKIE ESPERA 3 PARAMETROS NOME, VARIAVEL P/ ARMAZENAR, TEMPO DE DURACAO
setcookie("cookieTest", json_encode($dataCookie), time()+3600);


//O COOKIE PODE SER VISTO NO CHROME USANDO F12>APPLICATION>COOKIE
echo "Cookie criado </br>";

//PARA RECUPERAR USAMOS A VARIVEL GLOBAL $_COOKIE PASSANDO O NOME DO COOKIE DESEJADO
if(isset($_COOKIE['cookieTest'])){
	print_r(json_decode($_COOKIE['cookieTest'],true));
	//objCookie = json_decode($_COOKIE['cookieTest']);
	//echo objCookie->nome;
}
?>