<html>
   <head>
      <title>Google Maps - Mapa 02</title>                                                          
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">

         var geocoder = new google.maps.Geocoder();
         
         function cidade(vCidade){
            geocoder.geocode({"address":vCidade}, function(results){
               formulario.lat.value = results[0].geometry.location.lat();
               formulario.lng.value = results[0].geometry.location.lng();
            });
         }

      </script>
   </head>
   <body>

      <?php

         //Conexão com banco de dados
         include "config.php";

         //SQl
         $sql = mysql_query("SELECT nome FROM cidade");

         //Número de registros
         $linha = mysql_num_rows($sql);

         //Loop
         for($i=0; $i<$linha; $i++){

            $nome = mysql_result($sql,$i, "nome");
         ?>
         <script type="text/javascript">
            cidade("<?php $nome ?>");
         </script>
         <form name="formulario">
            <input type="text" name="lat" id="lat"value="" />
            <input type="text" name="lng" id="lng"value="" />
            
         </form>
         <?php
         }
      ?>
   </body>
</html>