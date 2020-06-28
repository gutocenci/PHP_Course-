<?php  

//$dataRow = array();
$dateCSV = array();
$filename = "fgetsCSV.csv";

if(file_exists($filename)){
	
	$file = fopen($filename, "r");
	$dataHeader = explode(",",fgets($file));

	while($row = fgets($file)){
		$dataRow = explode(",",$row);
		for($i = 0; $i<count($dataHeader); $i++){
			$dateAux[$dataHeader[$i]]=$dataRow[$i];
		}
		array_push($dateCSV, $dateAux);
	}
	
	fclose($file);
	echo json_encode($dateCSV);
}

?>