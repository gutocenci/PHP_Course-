<?php  

require_once("config.php");

//SET A INSTANCIA DO OBJETO COM UM USUARIO DO BANCO E USA O __toString PARA EXIBIR O OBJETO
/*$user = new Usuario();
$user->setUserById(6);
echo json_encode($user);*/

//COMO PARA FAZER O GET DE TODOS OS USUARIOS DO BANCO EU NAO USA $THIS NO MODELO USUARIO, BASTA FAZER A CHAMADA POR METODO STATIC
//$list = Usuario::getAllUsers();
//echo json_encode($list);

//USANDO METODO STATIC COM SELECT LIKE NO BIND_PARAM
//$listLike = Usuario::getAllUserLike("Test");
//echo json_encode($listLike);

//FAZ UM SELECT NO BANCO TRAZENDO APENOS O LOGIN CORRETO, COM SUCESSO PREENCHE O OBJETO APENAS COM UM USUARIO E PARA EXIBIR O USUARIOS FAZ ECHO DO METODO MAGICO __toString
//$checkLogin = new Usuario();
//$checkLogin->login("LoginTest1","SenhaTeste1");
//echo $checkLogin;

//INSERT NO BANCO PASSNDO COMO PARAMENTO USER E PASS, AFINAL ID E AUTO_INCREMET E DATA E DATESTAMP
//$objToInsert = new Usuario();
//$objToInsert->insertUser("UserFISH","PassCAT");
//echo json_encode($objToInsert->getAllUserLike("UserFISH"));

//INSERT DO MODO CORRETO USANDO OS RECURSOS DO POO, APOS INSERT E FEITO UM SELECT DENTRO DA FUNCO PARA NO POSSUIR TRIBUTOS COM VALOR UNDEFINED/NULLS
//$objToInsert = new Usuario("","loginWithConstruct","passWithConstruct","");
//$objToInsert->setDeslogin("loginWithSet");
//$objToInsert->setDessenha("passWithPass");
//$objToInsert->insertUserUsingSetAndGet();
//echo $objToInsert;

//USANDO O INSERT POR MEIO DE CONSTRUCTOR PARA DIMINUIR A QUANTIDADE DE LINHS DE CODIGO
//$objToInsert = new Usuario("","loginWithConstruct","passWithConstruct","");
//$objToInsert->insertUserUsingSetAndGet();
//echo $objToInsert;

//INSERE NO BANCO USANDO UMA PROCEDURE PARA APOS A INSERCAO JA FAZER O SET/GET DOS ATRIBUTOS NAO PASSADOS PARA O CONSTRUTOR, COM APENAS UMA FUNCAO FOI POSSIVEL INSTANCIAR O OBJETO COM APENAS OS ATRIBUTOS QUE NAO POSSUI ATRIBUICAO AUTOMATICA NO BANCO E PARA NAO TER O PROBLEMA DE O OBJETO CONTENDO VALORES NULOS OU INDEFENIDOS NA PROCEDURE E FEITO UM SELECT PARA FAZER O SET DO ATRIBUTOS FALTANTES

//$objWithCall = new Usuario("","loginWithPROCEDURE","passWithPROCEDURE","");
//$objWithCall->insertAndGetUsingPROCEDURE();
//echo $objWithCall;

?>