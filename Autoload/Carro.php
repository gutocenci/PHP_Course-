<?php 

////FUNCAO SPL PARA VERIFICAR A EXISTENCIA da classe no mesmo DIRETORIO

//function __autoload($className){
//	require_once("$className.php");
//}

//FUNCAO SPL PARA VERIFICAR A EXISTENCIA DE UM DIRETORIO COM A CLASSE

//spl_autoload_register(function($checkDir){
//	if(file_exists("Abstract".DIRECTORY_SEPARATOR.$checkDir.".php")===true){
//		require_once("Abstract".DIRECTORY_SEPARATOR.$checkDir.".php");
//	}
//});


spl_autoload_register("checkClass");
function checkClass($nameClass){
	if(file_exists($nameClass.".php")===true){
		require_once($nameClass.".php");
	}else{
		if(file_exists("Abstract".DIRECTORY_SEPARATOR.$nameClass.".php")===true)
		require_once("Abstract".DIRECTORY_SEPARATOR.$nameClass.".php");
	}
}	

use abc\Veiculo;

class Carro extends Veiculo{

	private $marca;
	private $roda;

	public function __construct($marca, $roda){
		$this->marca = $marca;
		$this->roda = $roda;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function showAll(){
		echo "A marca e $this->marca, com $this->roda"."<br>"; 
	}

	public function __toString(){
		return json_encode(array(
			$this->getMarca()
		));
	}
}

$obj = new Carro("Gol", "4");
echo $obj;

 ?>