<html>
<head>
<title>PHP - Redução de texto</title>
</head>

<body>
<?php
//conexao
include("config.php");
//seleciona
$con = mysql_query("SELECT * FROM noticias");
//linhas
$linhas = mysql_num_rows($con);
//loop
for($i=0;$i<$linhas;$i++)
{
//o que sera requisato no banco de dados
$texto = mysql_result($con,$i,'texto'); 
$data = mysql_result($con,$i,'data');
$texto = mysql_result($con,$i,'texto');
//função
$htm = strip_tags($texto);
$limite = 2;
if(strlen($htm) > $limite)
	{
		$htm = preg_replace ("#(^.{1,$limite})\s(.*)#s","$1...",$htm);
	}
	//mostra na tela
	echo"<table width='325' border='0' cellspacing='0' cellpadding='0'>
  				<tr>
  				<td><div align='left' class='data'>$data</div></td>
  				</tr>
  <tr>
    <td height='24'><div align='left' class='titulo'>$titulo</div></td>
  </tr>
  <tr>
    <td><div align='left' class='texto'>$htm</div></td>
  </tr>
</table><br>";
}


?>
</body>
</html>
