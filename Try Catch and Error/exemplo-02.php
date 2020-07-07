<?php  

//PESSIMA PRATICA, DESSA FORMA VC ALTERA PARA NAO EXIBER OS NOTICES EM PRODUCAO ~ = NEGACAO 
error_reporting(E_ALL & ~E_NOTICE);

//A BOA PRATICA E USAR ESSA FUNCAO DENTRO DE ARQUIVOS DE CONFIGURACA PARA A EXECAO DE ERRO OUTRA FUNCAO TRATAR
                  //NOME DA FUNCAO PASSAGEM COMO STRING
set_error_handler("error_handler");

echo forceError();

                      //4 PARAMETROS OBRIGATORIOS E NESSA ORDEM
function error_handler($code, $message, $file ,$line){
	echo "ERROR USING ERROR_HANDLER";
	echo json_encode(array(
					 'code'=>$code,
					 'message'=>$message,
					 'line'=>$line,
					 'file'=>$file ));
}

function forceError(){
	//DIVISAO POR 100 PARA FORCAR ERRO
	return 100/0;
}

?>