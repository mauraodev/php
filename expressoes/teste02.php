<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$texto = $_POST["texto"];
$tags = array(

		//Negrito
		'/\[b](.*?)\[\/b]/' => "<strong>\\1</strong>",
		'/\[img](.*?)\[\/img]/' => "<a href=\"\\1\" alt=\"imagem\"><img width='50' height='50' src=\"\\1\" alt=\"Imagem\"></a>"
		
		);
$texto = preg_replace(array_keys($tags), array_values($tags), $texto);
echo nl2br($texto);
?>

</body>
</html>