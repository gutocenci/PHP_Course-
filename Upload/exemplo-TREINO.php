<!-- PARA FAZER UPLOAD DE VARIOS ARQUIVOS AO MESMO TEMPO E NECESSARIO USAR O PARAMETRO multiple dentro do input do form e ao final do nome do input usar [] para passar o array no POST-->
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="uploadFile[]" multiple="multiple">
	<button>SEND</button>
</form>

<?php  

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	$files = $_FILES["uploadFile"];

	$nameDir = "uploadosTREINO";
	if(!is_dir($nameDir)){
		mkdir($nameDir);
	}

	echo "<p>- UPLOADED List -</p>";
	for($i=0 ; $i<count($files['name']); $i++){
		if(move_uploaded_file($files["tmp_name"][$i], $nameDir.DIRECTORY_SEPARATOR.$files["name"][$i])){
			echo "<strong>Arquivo de index/nome: </strong>".$i." / ".$files["name"][$i]." - Upload SUCESSO !</br>";
		} else {
			throw new Exception("NAO FOI POSSIVELFAZER O UPLOAD do arquivo de index $i</br>");
			
		}
	}
}

?>