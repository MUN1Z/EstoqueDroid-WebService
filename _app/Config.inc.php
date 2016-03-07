<?php

// CONFIGRAÇÕES DO DB ####################
define('HOST', 'localhost');                    //HOST DO BANCO DE DADOS 
define('USER', 'root');                        //USUARIO DO BANCO DE DADOS
define('PASS', 'saosao');                     //SENHA DO BANCO DE DADOS
define('DBSA', 'estoquedroid');              //NOME DO BANCO DE DADOS


// FUNÇÃO PARA CARREGAR TODAS AS CLASSES ####################
function __autoload($Class){
		$cDir = ['Conn', 'Helpers', 'Models'];
		$iDir = null;

		foreach ($cDir as $dirName):
			if(!$iDir && file_exists(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $Class . '.class.php') && !is_dir(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $Class . '.class.php')):
				include_once(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $Class . '.class.php');
				$iDir = true;
			endif;
		endforeach;

		if (!$iDir):
			echo "<b>Erro ao incluir:</b> {$Class}.class.php";
			die;
		endif;
	}

