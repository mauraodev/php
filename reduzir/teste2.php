<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$texto = "<h1>Ola mundo isso e um teste</h1>";
echo abrevia($texto);

function abrevia($texto) 
{
$tamanho = 5;
$texto = strip_tags($texto);
if (strlen($texto) > $tamanho) {
$texto = preg_replace("#(^.{1,$tamanho})\s(.*)#s","$1...",$texto);
}
return $texto;
} 
?>
</body>
</html>
