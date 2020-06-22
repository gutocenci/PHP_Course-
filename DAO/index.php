<?php  

require_once("config.php");

$user = new Usuario();

$user->setUserById(6);

echo $user;

//echo json_encode($user);
?>