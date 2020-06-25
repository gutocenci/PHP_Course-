<?php

$fileName = "Test";
//scandir le o conteudo de uma pasta OBS: os valores detalhados usar o var_dump ou foreach no array que retorna nao mostra todos os detalhes como [basename] ou [extension], e necessario usar o patchinfo();
$files = scandir($fileName);
$data = array();

foreach ($files as $img){
	//in_array retorna um array ignorando as chaves que nao comecem com os valores passado em segundo parametro
	if(!in_array($img, array(".",".."))){
		$filename = "Test".DIRECTORY_SEPARATOR.$img;
		$info = pathinfo($filename);
		//retorna o tamanho do arquivo em bytes
		$info['filesize']=filesize($filename);
		//data de ultima modificao, usou a funcao date com o primeiro parametro a mascara e segundo a funcao que retorna a data de modificacao
		$info['modifityDate']=date("d/m/y H:i:s",filemtime($filename));
		//como no windows DIRECTORY_SEPARATOR retornou a barra \, usou o replace passando o \\ duas vezes pq o PHP usa o \ como space
		$info['url']="http://localhost/PHP_Course-/DIR/exemplo-02.php/".str_replace("\\","/",$filename);
		array_push($data, $info);
	}
}

echo json_encode($data);

?>