<?php  

$linkImg = "https://i.pinimg.com/236x/e4/34/2a/e4342a4e0e968344b75cf50cf1936c09--indian-fashion-trends-wolf-dogs.jpg";

//SALVA O CONTEUDO DA IMAGEM
$contend = file_get_contents($linkImg);

//CRIA UM ARRAY COM CHAVE E VALOR CONTENDO O PATH, HOST E TIPO DE PROTOCOLO
$parse = parse_url($linkImg);

//A FUNCAO BASENAME PEGA SOMENTE O NO DO ARQUIVO E NAO O CAMINHO TODO QUE O PARSE_URL DISPONIBILIZA
$basename = basename($parse['path']);

$file = fopen($basename, "w+");

fwrite($file, $contend);

fclose($file);

?>

<img src="<?=$basename?>">