<?php  

class Cadastro{

	private $email;
	private $senha;
	private $user;

	public function setEmail($email){
		$this->email = $email;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function setUser($user){
		$this->user = $user;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function getUser(){
		return $this->user;
	}

	public function __toString(){
		return json_encode(array(
			'email'=>$this->getEmail(),
			'senha'=>$this->getSenha(),
			'user'=>$this->getUser()
		));
	}
}

?>