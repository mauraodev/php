<?php
	session_start('login');
	
	$_SESSION['usuario'] = 'Mauro';
	$_SESSINO['senha'] = 'Zeta1451';
	
	if((isset($_SESSION['usuario'])) && (isset($_SESSION['senha']))){
		echo "Entrou no if";
	}
	else{
		echo "Não entrou no if";
	}
	
	
?>