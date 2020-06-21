<?php  

require_once("config.php");
$sql = new Sql();
$results = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($results);

?>