<?php 

// Conecta ao banco de dados
mysql_connect('localhost','root','');
mysql_select_db('trio');

$sql = "SELECT desnome, texobjeto FROM apptabela WHERE desnome = 'banner'";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {
    echo "<pre>";
    print_r($row['texobjeto']);
    echo "</pre>";
}

?>