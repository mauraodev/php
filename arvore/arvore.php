<link rel="stylesheet" type="text/css" href="arvore.css">
<?php
   header("Content-Type: text/html; charset=UTF-8", true);

   $conexao = mysql_connect('localhost','root','');
   mysql_select_db('php',$conexao);

   
   function mostra_filho($pai, $nivel = 0) {

      $result = mysql_query('SELECT * FROM arvore WHERE pai ="'.$pai.'";');

      while ($row = mysql_fetch_array($result)) {
         $espaco = str_repeat('&nbsp;',$nivel);
         echo "<li>".$espaco."<input type='checkbox' name='arvore[]' />".$row['nome']."</li>";  
         mostra_filho($row['filho'],$nivel+1);
      }

   }
   
   echo "<ul class='arvore'>";
   mostra_filho(0);
   echo "</ul>";
?>
