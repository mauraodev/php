<?php
     
   //Usuario
   $usuario = "root";
   
   //Senha
   $senha = "key1451";
   
   //Banco
   $banco = "google";
   
   //Servidor
   $servidor = "localhost";
   
   //Conexão
   $conexao = mysql_connect($servidor,$usuario,$senha);
   
   //Banco
   $banco = mysql_select_db($banco);
   
   
?>