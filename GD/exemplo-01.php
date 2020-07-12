<?php  
//ALTERA O TIPO DE ARQUIVO PERMITINDO QUE POSSA SER USADA POR EXEMPLO EM UMA <img source ="img.php"
header("Content-Type: image/png");

//COMO NO FOPEN CRIA-SE UMA VARIAVEL RESOURCE
$image = imagecreate(512, 256);

//O PRIMEIRA IMAGECOLORALLOCATE SEMPRE SERA O BACKGROUND
$white = imagecolorallocate($image, 255, 255, 255);
$blue = imagecolorallocate($image, 0, 0, 255);

//PASSAGEM DE TEXTO PARA A IMAGEM RESOURCE, TAMANHO FONTE, EIXO X, EIXO Y, STRING, COR
imagestring($image, 5, 150, 120, "Image created by Gustavo", $blue);

//PARA IMPRIMIR A IMAGEM CRIADA E NECESSARIO ESTAR ALINHADA COM O TIPO DE ARQUIVO DEFINIDO NO HEADER
imagepng($image);

//COMO NO FOPEN E BOA PRATICA SEMPRE FECHAR PARA NAO FICAR PENDURDO NO PHP SIDE
imagedestroy($image);
?>