<?php  

header("Content-Type: image/jpeg");

//CRIA A VARIAVEL RESOURCE A PARTIR DO GET DAS INFORMACOES DO ARQUIVO
$image = imagecreatefromjpeg("images/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 4, 440, 350, "Nome: GUSTAVO", $titleColor);
//utf8_decode COMO NO PARAMTRO LANG DO HTML PERMITE A INTERPRETACAO DOS CARACTER DA LINGUAGEM NATURAL
imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

$date = date("Y/m/d");

//OBS: COMO O ARQUIVO SERA SALVA NA MAQUINA QUANDO PASSADO O SEGUNDO PARAMENTRO LEMBRAR QUE MASCARAS COMO / \ _ PODE NAO FUNCIONAR NO SISTEMA OPERACIONAL PRA NOME DE ARQUIVOS

//SE PASSAR DOIS PARAMETROS SALVA NA MAQUINA, MAS NAO EXIVE NA TELA. CHAMA A FUNCAO NOVAMENTE SOMENTE COM A VARIAVEL RESOURCE PARA EXIBIR NO NAVEGADOR
imagejpeg($image, "certificado-".date("D-M-Y").".jpg");

//3º PARAMETRO DEFINE A QTS DE BYTES PARA O JPEG
imagejpeg($image, "certificado-lowSize-".date("D-M-Y").".jpg", 10);

imagedestroy($image);
?>