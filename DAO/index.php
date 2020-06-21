<?php  

require_once("config.php");
$sql = new Sql();
$results = $sql->select("SELECT * FROM tb_usuarios WHERE  idusuario = :ID", array(':ID'=>5));

echo json_encode($results);

?>