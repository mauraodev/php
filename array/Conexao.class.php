<?php

    class Conexao{

        function conecta(){
            $conexao = mysql_connect("127.0.0.1","root", "key1451");
            $this->banco("cobra");
            echo"Conectado";
        }

        function banco($banco){
            mysql_select_db($banco);
        }

        function desconecta(){
            mysql_close();
            echo"Desconecta";
        }

        function query($tabela){
            $this->conecta();
            $seleciona = mysql_query("SELECT * FROM ".$tabela." ");

            while($row = mysql_fetch_array($seleciona)){
                echo "<p>".$row["nome"]."</p>";
            }
        }

        function inserir($tabela, $valor){
            $inserir = mysql_query("INSERT INTO ".$tabela." (nome) VALUES ('".$valor."')");
            echo "<p>Inserido com sucesso</p>";
        }

        function deleta($tabela, $id){
            $deleta = mysql_query("DELETE FROM ".$tabela." WHERE id='".$id."'");
            echo "<p>Deleta com sucesso ".$id."</p>";
        }
    }
?>
