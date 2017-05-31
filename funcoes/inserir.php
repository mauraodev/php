<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//receba palavra 
$class = $_POST['class'];


//incluir a biblioteca de funcoes
include("funcoes.php");

if($class == 's')
{
	include("config.php");
	$nome = $_POST['nome'];
	inserir($nome);
}
else
{
	include("config.php");
	$nome = $_POST['nome'];
	inserir($nome);
}
?>
</body>
</html>
