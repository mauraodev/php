<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

function cadastro($valor)
{
	echo"<form>
	Nome:<input type='text'>
	</form>";
	echo $valor;
}

$tipo = 1;

switch($tipo)
{
	case 0:
	{
		cadastro('the sims');
		break;
	}
	case 1:
	{
		cadastro('Spore');
		break;
	}
		
	default:
		echo"Nenhuma opção";
}
?>
</body>
</html>
