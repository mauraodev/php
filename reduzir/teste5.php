<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
// string
$mensagem = "bacana e legal";

// troco as letras: a e b por *
$mensagem = preg_replace("/[a,b]/i", "...", $mensagem);

// resultado: **c*n* e leg*l
echo $mensagem;
?>
</body>
</html>
