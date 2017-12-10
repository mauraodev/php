<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

header('Content-Type: text/html; charset=utf-8');

if (file_exists("livros.xml")) {
	$xml = simplexml_load_file("livros.xml");
	
	foreach ($xml as $item) {
		echo $item->nome;
	}

} else {
	exit("Arquivo não existe");
}
