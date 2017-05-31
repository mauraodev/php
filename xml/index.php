<?php

header('Content-Type: text/html; charset=utf-8');

$xml = simplexml_load_file("livros.xml");

$tmlXml = $xml;

$arrCategorias = $tmlXml->categorias;
//echo "<pre>";print_r($arrCategorias);echo "</pre>";

foreach($arrCategorias->categoria as $arquivo){

	echo "<pre>";print_r($arquivo);echo "</pre>";
}

?>