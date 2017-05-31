<?php

   session_start('logar');

	$sessao = $_SESSION['logar'] = 'logar';
	
	if($sessao == 'logar'){
		echo "logar";
	}
   
?>