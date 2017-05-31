<?php 
	session_start('logar');
	echo $_SESSION['usuario'];
	session_destroy();
?>
<a href="sessao02.php">Sessão 02</a>