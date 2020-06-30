<?php  

$filename = "farmers-e-hunter.jpg";
$base64 = base64_encode(file_get_contents($filename));

$fileExt = new finfo(FILEINFO_MIME_TYPE);
$ext = $fileExt->file($filename);
$base64PadraoExibicao =  "data:".$ext.";base64,".$base64;

?>

<img src="<?=$base64PadraoExibicao?>">>