<!-- COMO PADRAO E USUDO O METODO GET, ATE MESMO PARA ABRIR  ESSA FORMULARIO. COMO PRECISAMOS FAZER UPLOAD DE UM ARQUIVO NAO STRING POST FAZ NECESSARIO-->

<!-- ENCTYPE E PRECISO PARA QUE O LADO DO SERVIDOR CONSIGA INTERPRETAR O TIPO DE ARQUIVO NAO STRING, NO CASO BINARIO-->
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="uploadFile">
	<button>SEND</button>
</form>

<?php  

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	//NAO FOI USADO $_POST PQ O UPLOAD NAO FOI FEITO DE UM ARQUIVO QUE APENAS A STRING RESOLVER O PROBLEMA. uploadFile e o nome do input no formulario
	$file = $_FILES["uploadFile"];

	if($file["error"]){
		throw new Exception("Error: ". $file["error"]);
	}

	$nameDir = "uploados";

	if(!is_dir($nameDir)){
		mkdir($nameDir);
	}

	//COMO E CRIADA UM PROCESSO DE UPLOAD ONDE AO TERMINAR O ENVIO DE TODOS OS PACOTES O ARQUIVO ESTA APTO A SER SALVO LOCALMENTE NO SERVIDOR EM UM DIRETORIO COM AS DEVIDAS PERMISSOES DE ACESSO, DESSA FORMA E PASSADO COMO PARAMETRO O "tmp_name e tb o caminho."
	if(move_uploaded_file($file["tmp_name"], $nameDir.DIRECTORY_SEPARATOR.$file["name"])){
		echo "UPLOAD FEITO COM SUCESSO !!";
	} else {
		throw new Exception("NAO FOI POSSIVELFAZER O UPLOAD");
		
	}
}

?>