<?php
   $conexao = mysql_connect("localhost","root","key1451");
   $banco = mysql_select_db("sims2",$conexao);
   $sql = mysql_query("SELECT nome FROM menu");
   while($linha = mysql_fetch_array($sql)){
      echo $linha['nome'];
   }
?>
