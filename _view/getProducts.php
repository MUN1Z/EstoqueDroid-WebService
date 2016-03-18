<?php
	require('../_app/Config.inc.php');
        
	$json = [];

	foreach(Produtos::GetProdutos() as $Valor):
		$json['produto'][] = $Valor;
	endforeach;

	echo json_encode($json);
?>