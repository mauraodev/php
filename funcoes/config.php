<?php 
# Dados de Mysql
   $user="root"; # usuário do mySql
   $pass=""; # senha do mySql
   $bd="php"; # nome do banco de dados
   
# Coenxao
   mysql_connect("localhost", $user, $pass);
   mysql_select_db($bd);
?>