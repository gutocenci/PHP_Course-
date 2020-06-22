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
$checkLogin = new Usuario();
$checkLogin->login("LoginTest1","SenhaTeste1");
echo $checkLogin; 
?>