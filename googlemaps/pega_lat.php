<?php
   //Conexao com Banco de Dados
   include("config.php");
?>
<html>
   <head>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
      <script type="text/javascript">
         var geocoder = new google.maps.Geocoder();

         // busca a cidade, a comarca e coloca a msg de qtde de processos  
         function inicializa(sCidade) {
            if (geocoder) {
               geocoder.geocode( { 'address': sCidade}, function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                     formulario.lat.value = results[0].geometry.location.lat();
                     formulario.lng.value = results[0].geometry.location.lng();
                  };
               }); 
            };
         }

      </script>
   </head>
   <body>
      <?php
         if($_REQUEST['lat'] <> '' && $_REQUEST['lng'] <> ''){
            $sql = mysql_query("UPDATE cidade SET  latitude = ".$_REQUEST['lat'].", longitude = ".$_REQUEST['lng']." WHERE nome = 'Bauru' ");
         }
      ?>
      <a href="javascript:inicializa('Bauru')">Clique</a>
      <form name="formulario" action="pega_lat.php" method="post">
         <input type="text" name="lat" value="">
         <input type="text" name="lng" value="">
         <input type="submit" name="acao" value="Grava">
      </form>

      <?php
         //Sql para busca das cidads
         $sqlBusca = mysql_query("SELECT nome, latitude, longitude FROM cidade");
         
         //Conta o número de registros na tabela cidade
         $linha = mysql_num_rows($sqlBusca);
         
         print"<pre>".print_r($linha).print"</pre>";
         
         //Loop para exibir todos os cadastro da cidade
         for($i=0; $i<$linha; $i++){
                                                                                           /*
            //Busca na tabela o resultado
            $nome = mysql_result($sql, $i, "nome");
            $latitude = mysql_result($i, $sql, "latitude");
            $longitude = mysql_result($sql, $i, "longitude");
            
            //Exibe na tela o resultado
            print("Cidade:".$nome." Latitude:".$latitude." Longitude:".$longitude."<br/>");*/
            
         }
      ?>

   </body>
</html>
