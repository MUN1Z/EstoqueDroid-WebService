<?php
	require('../_app/Config.inc.php');
        
	
	$id = $_GET['id'];
	
	$result = Produtos::GetProdutoId($id);
	
	echo json_encode(array('produto'=>$result));
	
	
?>