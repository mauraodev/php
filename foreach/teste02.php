<form method="post" action="teste02.php">
	<input type="text" name="nome[]" value="Mauro" />
	<input type="text" name="sobre[]" value="Teste" />
	<input type="text" name="nome[]" value="Poly" />
	<input type="text" name="sobre[]" value="Teste" />
	<input type="submit" name="btnenviar" value="Enviar" />
</form>
<?php

	foreach($_REQUEST['nome'] as $nome){
		 echo $nome." - ".$sobre."<br/>";
	}
?>