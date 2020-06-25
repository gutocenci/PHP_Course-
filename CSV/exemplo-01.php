<?php  

require_once("config.php");

$sql = new Sql();
$results = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//como o retorno do banco e um array de arrays faz necessario o foreach do primeiro elemento do array para pegar apenas os headers
$header = array();
foreach ($results[0] as $key => $value) {
	array_push($header, ucfirst($key));
}
$file = fopen("test.csv","w+");
//implote pega o array e remove todos os caracteres como => e [] e retorna uma string adicionando o valor do primeiro parametro como separador
fwrite($file, implode(",",$header)."\r\n");


//para pegar os values de cada registro(row) faz um for dentro de outro. O PRIMEIRO: apenas cria um novo array para cada linha de registro da tabela. O SEGUNDO:  pega os valores da chave de cada registro para quando sair dele escrever no arquivo  
foreach ($results as $row) {
	$rows = array();
	foreach ($row as $key => $value) {
		array_push($rows,$value);
	}
	fwrite($file, implode(",",$row)."\r\n");
}
fclose($file);

?>