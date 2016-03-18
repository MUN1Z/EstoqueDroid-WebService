<?php
	require('../_app/Config.inc.php');
        
	
	$id = $_GET['id'];
	
	$result = Produtos::GetProdutoId2($id);
	
	echo json_encode(array('produto'=>$result));
	
	
?>