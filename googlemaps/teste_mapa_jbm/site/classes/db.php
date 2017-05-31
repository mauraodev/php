<?

if ($_SERVER['SERVER_NAME'] == "localhost") {
	$ligacao = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("jbm_mapa", $ligacao);
} else {
	$ligacao = mysql_connect("localhost", "mandali_mapa", "hdy74hdk");
	$db = mysql_select_db("mandali_mapa", $ligacao);
}

function select($strSql){
	global $db;
	global $ligacao;
    $resultado = mysql_query($strSql, $ligacao);
	return $resultado;
}

function update($strSql){
	global $db;
	global $ligacao;
    $resultado = mysql_query($strSql, $ligacao);
	return $resultado;
}



?>