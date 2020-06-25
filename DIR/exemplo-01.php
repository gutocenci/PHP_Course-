<?php  

$dirName =  "Test";
if(!is_dir($dirName)){
	mkdir($dirName);
}else{
	echo "Ja existe uma pasta com esse nome: ".$dirName." | Pasta removida";
	rmdir($dirName);
}

?>