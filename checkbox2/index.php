<?php

   $conexao = mysql_connect("localhost","root","");
   mysql_select_db('php',$conexao) or die (mysql_error());

   $sql = mysql_query("SELECT id_categoria FROM item WHERE id = 2 ");

   $arr = array();

   while($rd = mysql_fetch_array($sql)){

      $tr = $rd['id_categoria'];

   }   
   
   $arr = explode(",",$tr);
      

   $sql = mysql_query("SELECT id, categoria FROM categorias");

   echo "<ul>";
   while($rs = mysql_fetch_array($sql)){
   ?>
   <li><input type='checkbox' value='<?php echo $rs['id']; ?>' <?php  if(in_array($rs['id'],$arr)){ echo "checked='checked' "; }?> /><?php echo $rs['categoria']; ?></li>
   <?php
   }
   echo "</ul>";

?>
