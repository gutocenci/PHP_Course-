<?php  

try{

	/* {TENTATIVA: SENAO FUNCIONAR EMITE O ERRO E ENTRA NO CATCH PARA TENTAR RESOLVER O PROBLEMA}*/

	echo "TRY moment<br>";
	//EXCEPTION E UMA CLASSE NO PHP ONDE PODE SER USADO GET
	throw new Exception("Error Code", 400);
	
	//PARAMETRO OBRIGATORIO E UM OBJETO PADRAO OU CRIADO
}catch(Exception $e){
	//FOI CONVERTIDO EM JSON PQ GERALMENTE QUEM TRATA O ERRO PRECISA DE UM DADO FORMATADO FRONT/FULL STACK DEV
	echo json_encode(array('Message'=>$e->getMessage(),
		  'line'=>$e->getLine(),
		  'file'=>$e->getFile(),
		  'code'=>$e->getCode()
	))
	;
} finally {
	//EXEMPLOS DE USO: MANDAR E-MAIL ADM/SUPORTE E ALTERACAO NO BANCO
	echo "<br>i'll always execute !<br>";
}

?>