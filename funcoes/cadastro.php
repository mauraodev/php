<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//recebe os dados
$class = $_GET['class'];

//inclui a biblioteca de funcoes
include ("funcoes.php");

switch($class)
{
	case 's':
	cadastro($class);
	break;
	
	case 't';
	cadastro($class);
	break;
	
	default:
	echo"Nehuma opção seleciona";
	break;

}	
?>
</body>
</html>
