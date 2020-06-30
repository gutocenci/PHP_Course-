<?php 

//USANDO O FGETS PARA FAZER O CAMINHO OPOSTO, USAMOS UM ARQUIVO CSV QUE VOLTARA A SER UM ARRAY COM CHAVE E VALOR. HEADER E IGUAL A PRIMEIRA LINHA. PARA FAZER A PASSAGEM DE VALOR KEY VALUE DO ARRAY DE ARRAYS FOI NECESSARIO UM FOR DENTRO DO WHILE ONDE CADA LINHA DIFERENTE DE EOF/FALSE AMARRASE COM SEU RESPECTIVO VALOR: POR EXEMPLO DateRegistro['header1'=>row1] / Date[$header[$i]] = $row[$i] 

$CSVwithHeaderRow= array();
$filename = "fgetsCSV.csv";

if(file_exists($filename)){
	$file = fopen($filename, "r");
	$header = explode(",",fgets($file));

	while($row = fgets($file)){
		$rowDate = explode(",",$row);

		for($i=0 ; $i<count($header); $i++){
			$dateCSV[$header[$i]] = $rowDate[$i];
		}

		array_push($CSVwithHeaderRow, $dateCSV);
	}
	fclose($file);
	echo json_encode($CSVwithHeaderRow);
}

?>