<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$string = <<<XML
<?xml version="1.0" encoding="iso-8859-1"?>
<catalogo>
    <livro>
        <nome>O Senhor dos Aneis</nome>
        <categoria>Literatura</categoria>
    </livro>
    <livro>
        <nome>O Hobbit</nome>
        <categoria>Literatura</categoria>
    </livro>
</catalogo>
XML;

$xml = simplexml_load_string($string);

print_r($xml);
