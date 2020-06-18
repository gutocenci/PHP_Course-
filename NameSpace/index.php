<?php

require_once("config.php");

use Cliente\Cadastro;

$obj = new Cadastro();

$obj->setEmail("eu@.com");
$obj->setUser("cenci");
$obj->setSenha("12345");
echo $obj;

$obj->venda();

?>