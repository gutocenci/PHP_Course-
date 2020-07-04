<?php  

$dir1 = "Dir1";
$dir2 = "Dir2";

checkDir($dir1);
checkDir($dir2);
createFile($fileName = "README.txt", $contents = "PHP is cool!");

$path1 = $dir1.DIRECTORY_SEPARATOR;
$path2 = $dir2.DIRECTORY_SEPARATOR;

//APENAS MOVER O ARQUIVO QUE ESTAVA NA RAIZ
rename($fileName, $path1.$fileName);
//MOVENDO E TROCANDO SEU NOME ENTRE PASTAS
rename($path1.$fileName, $path2."NewName.txt");
//MOVENDO E MANTENDO O NOME
rename($path1.$fileName, $path1.$fileName);


function createFile($fileName, $contents){
	if(!file_exists($fileName)){
		$file = fopen($fileName, "w+");
		fwrite($file, $contents);
		fclose($file);
	}
}

function checkDir($nameDir){
	if(!is_dir($nameDir)) mkdir($nameDir);
	echo $nameDir." criada";
}

?>