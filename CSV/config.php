<?php  

spl_autoload_register(function($className){
	$namePath = "class";
	$filename = $namePath.DIRECTORY_SEPARATOR.$className.".php";
	if(file_exists($filename)){
		require_once($filename);
	} 
});

?>