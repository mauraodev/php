<?php 
# Dados de Mysql
   $user="root"; # usuário do mySql
   $pass="key1451"; # senha do mySql
   $bd="thesims"; # nome do banco de dados
   
# Conexao
   mysql_connect("localhost", $user, $pass);
   mysql_select_db($bd);
?>