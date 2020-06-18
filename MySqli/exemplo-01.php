<?php  

$conn = new mysqli('localhost', 'root', '', 'dbphp7');

if ($conn->connect_error){
	echo "Error:".$conn->connect_error;
	exit();
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param('ss', $login, $senha);

$login = 'cenci';
$senha = '1234';

$stmt->execute();

$login = 'cenci2';
$senha = '4321';

$stmt->execute();

?>