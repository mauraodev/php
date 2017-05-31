<?php
  include("config.php");
  
  $inserir = pg_query($conexao,"INSERT INTO pessoa (id,nome) VALUES (5,'Polly')");
?>
