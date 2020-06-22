<?php  

class Usuario{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function setIdusuario($id){
		$this->idusuario = $id;
	}

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setDeslogin($deslogin){
		$this->deslogin = $deslogin;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDessenha($dessenha){
		$this->dessenha = $dessenha;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDtcadastro($dtcadastro){
		$this->dtcadastro = $dtcadastro;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setUserById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(':ID'=>$id));
		if(count($results) > 0){
			$row = $results[0];
			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}

	public function __toString(){
		return json_encode(array(
					 "idusuario"=>$this->getIdusuario(),
					 "dessenha"=>$this->getDessenha(),
					 "deslogin"=>$this->getDeslogin(),
					 "dtcadastro"=>$this->getDtcadastro()->format('d/m/y H:i:s')
					));
	}
}

?>