<?php  

header("Content-Type: image/jpeg");

//__DIR__ tras tudo que existe antes por exemplo .\fonts
$fontPlayball = __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

$fontBevan =  __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR. "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";

$image = imagecreatefromjpeg("images".DIRECTORY_SEPARATOR."certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$textColor = imagecolorallocate($image, 100, 100, 100);
$textAprovade = imagecolorallocate($image, 200, 0, 0);

//IMAGETTFTEXT PARA USAR UMA FONT EXTERNA NESTE CASO FOI USADO UM OPENSOURCE
imagettftext($image, 36, 0, 300, 150, $titleColor, $fontBevan, "CERTIFICAD0");
imagettftext($image, 36, 0, 300, 300, $textColor, $fontPlayball, "Gustavo Montanini Cenci");

imagestring($image, 3, 600, 550, "Concluido em ".date("d/m/Y"), $textAprovade);

imagejpeg($image, "certificadoWithFont.jpg");

imagedestroy($image);
?>