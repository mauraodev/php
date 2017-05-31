<?php

   include_once("config.php");

   for($i=0; $i<50; $i++){
      
      $sql = mysql_query("INSERT INTO item (nome) VALUES (".$i.")");
   }

?>
