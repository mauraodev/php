<?php 
	session_start('logar');
	echo $_SESSION['usuario'];
	session_destroy();
?>
<a href="sessao02.php">Sess�o 02</a>