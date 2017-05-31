<link rel="stylesheet" type="text/css" href="arvore.css">
<?php
   header("Content-Type: text/html; charset=UTF-8", true);

   $conexao = mysql_connect("localhost","root","");
   mysql_select_db('php',$conexao);

   function gerarCategoria($pai = 0, $nivel = 0){

      $sql = "SELECT * FROM categorias WHERE pai = '$pai'";

      $qr = mysql_query($sql)  or die (mysql_error());

      $dados = array();

      if(mysql_num_rows($qr) > 0){
         while($ln = mysql_fetch_assoc($qr)){
            $caracteres = str_repeat('&nbsp;',$nivel);
            $dados[] = array ('id'=>$ln['id'],'categoria'=>$caracteres.$ln['categoria']);
            $dados = array_merge($dados, gerarCategoria($ln['id'],$nivel+1));
         }
      }
      return $dados;
   }


   echo '<ul class="arvore">';

   foreach(gerarCategoria() as $chave => $valor){

      echo '<li>'.$valor['categoria'].'</li>';
   }

   echo '</ul>';
?>
