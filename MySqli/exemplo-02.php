<?php  

$conn = new mysqli('localhost', 'root', '', 'dbphp7');

if ($conn->connect_error){
	echo "Error:".$conn->connect_error;
	exit();
}

$result = $conn->query("SELECT * FROM tb_usuarios");

$resultSelect = array();

while($row = $result->fetch_assoc()){
	array_push($resultSelect, $row);
}

echo json_encode($resultSelect);

?>