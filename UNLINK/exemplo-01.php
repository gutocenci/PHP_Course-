<?php  

$listDelete = array();

if(!is_dir("images")) mkdir("images");

$file = fopen("testToUnlink","w+");
fclose($file);

if (unlink("testToUnlink") == true){
	array_push($listDelete, ['txt'=>"testToUnlink"]);   
}

foreach (scandir("images") as $item) {
	if(!in_array($item, array(".",".."))){
		unlink("images/".$item);
		array_push($listDelete, ['fileName'=>$item]);
	}
}

echo json_encode($listDelete);

?>