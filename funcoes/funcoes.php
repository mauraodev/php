<?php

function cadastro($class)
{
	echo"<form method='POST' action='inserir.php' name='cadastro'>
	Nome:<input type='text' name='nome'><br>
	<input type='hidden' value='$class' name='class'><br>
	<input type='submit'>";
}

function inserir($nome)
{
	$inserir = mysql_query("INSERT INTO jogo (nome) VALUES ('$nome')");
	echo"Inserido com sucesso";
}

?>

