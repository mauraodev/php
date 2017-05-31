<p><a href="index.php">Voltar</a></p>
<?php

    include("conexao.php");

    $id = $_REQUEST['id'];
    
    $query = "DELETE FROM cadastro WHERE id = ".$id." ";
    
    $executa = mysql_query($query);

    if($executa){
        echo "Deletado com Sucesso!";
    }else{
        echo "Erro ao Deletar!";
    }

?>
