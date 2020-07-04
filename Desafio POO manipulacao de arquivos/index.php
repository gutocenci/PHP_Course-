<form method="POST" enctype="multipart/form-data">
	<label>Selecine os arquivos para Upload</label>
	<br>
	<input type="file" name="fileUpload[]" multiple>
	<br>
	<button>Send Files Uplaod</button>
	<br>
</form>

<?php  

require_once("config.php");

$file = new File("Myname", "Gustavo");
//echo json_encode($file->getUserById(6)); 
echo $file->createFile()."<br>";


if($_SERVER['REQUEST_METHOD'] === "POST"){
	
	$files = $_FILES["fileUpload"];
	$file->setnameDir("uploads");
	$file->creatDir();
	
	if(!$files['error'][0] && count($files['name'])>0){
		if ($file->moveUploadsFiles($files)) echo File::printSucessUpload();
	}else{
		throw new Exception("Error when upload files: ".$files['error']);
	}

}

?>