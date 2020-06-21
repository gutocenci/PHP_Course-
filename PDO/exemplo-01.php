<?php

$conn = new PDO("sqlsrv:Server=localhost,1433;Database=dbphp7", "sa", "root");
//$conn = new PDO("odbc:Driver={SQL Server};Server=.\SQLEXPRESS;Database=dbphp7; Uid=sa;Pwd=root;");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br>"; 

foreach($results as $row){
	foreach ($row as $key => $value ){
		echo "<strong>".$key."</strong>"." = ".$value."<br>";
	}
	echo "===========================================<br>";
}

?>