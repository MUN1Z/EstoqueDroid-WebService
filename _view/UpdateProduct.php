<?php
	require('../_app/Config.inc.php');
        
        
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
                $id = $_POST['id'];;
                
		$produto['name'] = $_POST['name'];
		$produto['description'] = $_POST['description'];
		$produto['price'] = $_POST['price'];
		
		echo Produtos::Update($produto, $id);
	}
?>