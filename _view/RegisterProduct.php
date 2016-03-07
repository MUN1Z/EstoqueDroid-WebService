<?php
	require_once ('../_app/Config.inc.php');
        
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
      
		$produto['name'] = $_POST['name'];
		$produto['description'] = $_POST['description'];
		$produto['price'] = $_POST['price'];
		
		echo Produtos::Create($produto);
	}
?>