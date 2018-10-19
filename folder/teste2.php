<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manipulação de arquivos</title>
</head>

<body>
<?php
//pega o caminho da pasta que o arquivo esta
$pasta = getcwd();
//abre a pasta que foi pega no caminho anterior
$abre = opendir($pasta);
//le a pasta e monta os vetores para exibilos na tela
while ($arquivo = readdir($abre)) 
{
	//remove os . e .. da lista de exibição
	if ($arquivo != "." && $arquivo != "..") 
	{
        echo "$arquivo<br>";
    }
}
?>
</body>
</html>
