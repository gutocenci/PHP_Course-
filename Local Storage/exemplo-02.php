<script>
	//DIFERENTE DO COOKIE PHP O STORAGE COM JS E ARMAZENADO SEM DATA DE PERSISTENCIA
	//ATRIBUIR UMA CHAVE E VALOR NO STORAGE DO CLIENTE
	localStorage.setItem("view", 1);
	//REMOVER UMA CHAVE DO STORAGE NO CLIENTE
	localStorage.removeItem("view");
	if(typeof(Storage)!="undefine"){
		//GET DE UMA CHAVE NO STORAFE DO CLIENTE
		if(localStorage.getItem('view')){
			//PARA DIMINUIR A SINTAXE PODE USAR .view AO INVEZ DE .getItem('view')
			localStorage.view = Number(localStorage.view)+1;
		}else{
			localStorage.setItem("view", 1);
		}
		var storageContents = localStorage.getItem("view");
		document.write(storageContents);
	}else{
		document.write("Sem suporte a Web Storage");
	}
</script>