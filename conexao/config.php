<?php

    //Banco de dados
    $banco = "mnweb";
    //Usuario
    $usuario = "root";
    //Senha
    $senha = "key1451";
    //Servidor
    $servidor = "localhost";

    //Conexao
    $conexao = mysql_connect($servidor,$usuario, $senha) or die ("Não foi possivel conectar");
    //Seleciona banco de dados
    mysql_select_db($banco,$conexao);
?>