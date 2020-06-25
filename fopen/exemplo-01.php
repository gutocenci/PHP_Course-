<?php  

//a variavel $file passa a ser do tipo source, o w+ significa que vai abrir/criar no modo escrita e leitura com o ponteiro no inicio do arquivo.
//$file = fopen("log.txt","w+");
//a+ para ler e escrever sem perder os dados do arquivo
$file = fopen("log.txt","a+");
//fwrite para ler OBS: usar \r para pular linha, \n para criar uma nova \t para tabular
fwrite($file,date("y:m:d")."\r\n");
//fclose para fechar
fclose($file);
//OBS: para manipular os arquivos e sempre necessario criar um ciclo, da msm forma que um PROCEDURE no banco ou COMMIT
echo "creat";

?>