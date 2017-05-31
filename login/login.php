<?php

   include_once("config.php");

   $usuario = $_REQUEST['usuario'];
   $senha = $_REQUEST['senha'];

   $sql = mysql_query("SELECT id FROM usuario WHERE usuario = '".$usuario."' AND senha = '".$senha."' ");

   if(mysql_num_rows($sql) == 1){

      session_start('logar');

      $_SESSION['usuario']  =  $usuario;
      $_SESSION['senha'] = $senha;
      
     header("Location: teste.php");

   }else{

      echo "Não existe";

   }


?>
