<?php

    //Inclusão do arquivo de conexão
    include_once 'conexao.php';
    
    //SQL
    $query = "INSERT INTO usuario (usuario, senha) VALUES ('Mauro', 123456)";
    
    //Inserir no banco
    $inserir = mysql_query($query);
    
    //Verifica se foi inserido
    if ($inserir) {
    
        echo "<p>Inserido com sucesso!</p>";
    } else {
    
        echo "<p>Erro ao inserir :( </p>";
        echo mysql_error();
    }    

?>