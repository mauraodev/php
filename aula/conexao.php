<?php

    $usuario = "root";
    $senha = "key1451";
    $banco = "aula";
    $servidor = "localhost";

    $conexao = mysql_connect($servidor,$usuario,$senha);
    $banco = mysql_select_db($banco,$conexao) or die (mysql_error());
?>
