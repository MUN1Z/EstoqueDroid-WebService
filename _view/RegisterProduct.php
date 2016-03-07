<?php
	require('../_app/Config.inc.php');
        
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
      
		$produto['nome'] = $_POST['nome'];
		$produto['descricao'] = $_POST['descricao'];
		$produto['preco'] = $_POST['preco'];
		
		echo Produtos::Create($produto);
	}
?>