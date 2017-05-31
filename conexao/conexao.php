<?php

    //Usuário
    $usuario = 'root';
    
    //Senha
    $senha = '';
    
    //Banco
    $banco = 'php';
    
    //Servidor
    $servidor = 'localhost';
    
    //Conexão
    $conexao = mysql_connect($servidor, $usuario, $senha);
    
    //Verifica se aconteceu algum problema
    if (!$conexao) {
    
        echo "<p>Erro ao conectar</p>";
        echo mysql_error();
    }
    
    //Caso a conexão estejá OK
    mysql_select_db($banco);
       

?>