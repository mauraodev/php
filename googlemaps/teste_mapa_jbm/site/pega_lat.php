<?
   require_once "classes/funcoes.php";
?>

<?
   $id = $_REQUEST["id"];
   $lat = $_REQUEST["lat"];
   $lng = $_REQUEST["lng"];

   if (trim($lat) <> '') {
      $sql = 'update mapa set num_lat = ' . $lat. ', num_lng = ' . $lng . ' where id = ' . $id;
      //echo $sql;
      update($sql);
   }
?>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">

   var geocoder = new google.maps.Geocoder();

   // busca a cidade, a marca e coloca a msg de qtde de processos  
   function inicializa(sCidade) {
      if (geocoder) {
         geocoder.geocode( { 'address': sCidade}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
               formulario.lat.value = results[0].geometry.location.lat();
               formulario.lng.value = results[0].geometry.location.lng();
               formulario.submit();
            };
         }); 
      };
   }

</script>


<?
   $resultado = select('select * from mapa where num_lat = 0 limit 1');
   $i = 1;
   if ($linha = mysql_fetch_array($resultado)) {
   ?>
   <body onload="inicializa('<?=$linha["des_cidade"]?>')">
   </body>
   <form name=formulario action=pega_lat.php method=post>
      <?=$linha["des_cidade"]?> <br>
      <input type=text name=id value='<?=$linha["id"]?>'>
      <input type=text name=lat>
      <input type=text name=lng>
      <input type=submit name=acao value="Grava">
   </form>
   </html>

   <?
   }
?>
