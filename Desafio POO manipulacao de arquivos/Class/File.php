<?php  

class File{
	private $name;
	private $contents;
	private $nameDir;

	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setContents($contents){
		$this->contents = $contents;
	}

	public function getContents(){
		return $this->contents;
	}

	public function setnameDir($nameDir){
		$this->nameDir = $nameDir;
	}

	public function getnameDir(){
		return $this->nameDir;
	}


	public function __construct($name = "", $contents = "", $nameDir = ""){
		$this->name = $name;
		$this->contents = $contents;
		$this->nameDir = $nameDir;
	}

	public function createFile(){
		$file = fopen($this->name.".txt", "w+");
		fwrite($file, $this->contents);
		fclose($file);
		return "Arquivo criado com sucesso";
	}

	public function creatDir(){
		$nameDir = $this->getnameDir();
		if(!is_dir($nameDir)) mkdir($nameDir); 
	}

	public function moveUploadsFiles($files){
		$nameDir = $this->getnameDir();
		for($i=0; $i<count($files['name']); $i++){
			if(!move_uploaded_file($files['tmp_name'][$i], $nameDir.DIRECTORY_SEPARATOR.$files['name'][$i]))
				throw new Exception("Error during upload in server side ".$files['error']);
				
		}
		return true;
	}

	public static function printSucessUpload(){ 
		return "<strong>Arquivos upados com sucesso</strong>"; 
	}

	//PARA RESPEITAR O PADRAO S.O.L.I.D NAO DEVERIA EXISTER ESSE METODO NESSE MODELO APENAS PARA TREINO
	public function getUserbyID($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID" , array(':ID'=>$id));
		return $results;
	}
}

?>