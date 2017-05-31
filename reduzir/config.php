<?php 
# Dados de Mysql
   $user="root"; # usuário do mySql
   $pass=""; # senha do mySql
   $bd="wow"; # nome do banco de dados
   
# Coenxao
   mysql_connect("localhost", $user, $pass);
   mysql_select_db($bd);
?>