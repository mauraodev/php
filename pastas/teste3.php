<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$filetype = ".jpg";
$dir = getcwd();
$abrir = opendir($dir);

while ($file = readdir($abrir)) {

    //verifica se a extenção do arquivo é a mesma da variável
    if (substr($file,-4) == $filetype) {

              //se for exibe o nome do arquivo
 echo $file."<br>";
    }
}
?>
</body>
</html>
