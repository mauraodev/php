<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function verifica($var){
	if(eregi("[a-zA-Z]",$var)) {
		 echo "Somente contem caracteres do alfabeto";
	}
}

$nome = "1";
verifica($nome);

echo "Ela ^era triste";
?>

<?php
	$email = "mauroonelabs.com";
	$padrao = "^(.+)@(.+)\.(.+)$";
	
	if(ereg($padrao,$email))
	{
		echo"Seu email passou";
	}
	else{
		echo"Seu email não passou";
	}
?>
</body>
</html>