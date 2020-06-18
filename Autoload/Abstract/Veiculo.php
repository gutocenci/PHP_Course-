<?php 

namespace abc;

abstract class Veiculo{

	protected $cor;
	protected $tamanho;
	protected $peso;

	protected function setCor($cor){
		$this->cor = $cor;
	}

	protected function getCor(){
		return $this->cor;
	}	
}

?>