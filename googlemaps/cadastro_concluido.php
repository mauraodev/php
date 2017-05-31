<?php

   include("config.php");

   $sql = "SELECT estado FROM EST_COMARCA WHERE AND";
   
   foreach($_REQUEST['estado'] as $vEstados){
      "estado ='".$vEstados."'";
   }
   
   mysql_query($sql);
?>