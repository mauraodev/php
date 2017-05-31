<?php
   header("Content-Type: text/html; charset=UTF-8", true);
   
   //Conexão
   include_once("config.php");
?>
<html>
   <head>
      <title>Sistema de Login</title>
   </head>
   <body>
      <form method="post" action="login.php">
         <label>Usuário:</label>
         <input type="text" name="usuario" value="" />
         <label>Senha:</label>
         <input type="password" name="senha" value="" />
         <input type="submit" value="Enviar" />
      </form>
   </body>
</html>