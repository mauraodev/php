<?php

$conexao = mysql_connect('localhost', 'root', '');

mysql_select_db('php', $conexao);

$palavra = utf8_decode('Atenção');

mysql_query("INSERT INTO appcidade (codappestado, desnome) VALUES (25, '" . $palavra . "')");
?>