<?php
   include("config.php");

   $sql = pg_query($conexao,"SELECT * FROM pessoa");

   while($rs = pg_fetch_array($sql)){
      echo $rs['id']."<br/>";
   }

?>
