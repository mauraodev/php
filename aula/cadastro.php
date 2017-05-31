<p><a href="index.php">Voltar</a></p>
<?php

    //Conexão com banco
    include("conexao.php");

    //Recebe
    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];

    //SQL
    $query = "INSERT INTO cadastro (nome, sobrenome) VALUES ('".$nome."','".$sobrenome."')";

    //Executa
    $executa = mysql_query($query);

    if($executa){
        echo "Inserido com Sucesso!";
    }else{
        echo "Erro ao Inserir!";
    }

?>
