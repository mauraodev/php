<?php
  
  $conn =  mysql_connect('localhost','root','key1451','mysql');
  
  mysql_select_db('livro',$conn);
  
  mysql_query("INSERT INTO famosos(nome) VALUES ('Mauro')", $conn);
  
  mysql_close($conn);
?>
