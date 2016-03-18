<?php
	require('../_app/Config.inc.php');
        
        $id = $_GET['id'];
        
	echo Produtos::Delete($id);
?>