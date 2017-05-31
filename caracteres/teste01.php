<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php
// veja o código fonte da página para entender
// o resultado desta função

$html = $_POST["texto"];
$titulo = $_POST["titulo"];
$texto = htmlentities($html);
$titulo_replace = htmlentities($titulo);

include("config.php");

$inserir = mysql_query("INSERT INTO noti(texto, titulo) VALUES ('$texto','$titulo_replace') ");

?>
</p>
<p><a href="teste02.php">Mostra</a></p>
</body>
</html>
