<?php
  include("config.php");
  
  $update = pg_query($conexao,"UPDATE pessoa SET nome = 'Mauro' WHERE id = '4'");
?>
