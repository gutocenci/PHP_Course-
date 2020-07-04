<?php  

spl_autoload_register(function ($nameClass){
	$nameDir = "Class";
	$filename = $nameDir.DIRECTORY_SEPARATOR.$nameClass.".php";
	if(file_exists($filename)){
		require_once($filename);
	}else{
		throw new Exception("Error: A classe ".$nameClass." nao existe");
	}
});

?>