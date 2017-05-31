<?
   require_once "classes/funcoes.php";
?>

<html>
   <head>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
      <script type="text/javascript">

         function initialize() {
            var latlng = new google.maps.LatLng(-15,-48);

            var myOptions = {
               zoom: 4,
               center: latlng,
               mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            var geocoder = new google.maps.Geocoder();

            <?
               $resultado = select('select * from mapa where num_lat <> 0');
               while ($linha = mysql_fetch_array($resultado)) {
                  echo "plota_cidade('" . $linha["des_cidade"] . "', '" . $linha["des_texto"] . "', map, geocoder, " . $linha["num_lat"] . ", " . $linha["num_lng"];
                  echo ");";
                  echo "\n";
                  //+ $linha["des_cidade"] + "', '" + $linha["des_texto"] + "', map, geocoder, " + $linha["num_lat"] + ", " + $linha["num_lng"] ;
               }

            ?>

         }

         // busca a cidade, a marca e coloca a msg de qtde de processos  
         function plota_cidade(sCidade, sQtde, map, geocoder, lat, lng) {
            var posicao = new google.maps.LatLng(lat, lng);
            var marker = new google.maps.Marker({
               map: map, 
               position: posicao,
               title: sCidade + " - " + sQtde + " processo(s)",
               visible: true // ok
            });

            // var label = new Label({
            // map: map,
            // position: posicao,
            // text:  sQtde + " processo(s)"
            // });
         }


         // BIBLIOTECA LABEL

         // Define the overlay, derived from google.maps.OverlayView
         function Label(opt_options) {
            // Initialization
            this.setValues(opt_options);

            // Label specific
            var span = this.span_ = document.createElement('span');
            span.style.cssText = 'position: relative; left: -50%; top: -8px; ' +
            'white-space: nowrap; border: 1px solid blue; ' +
            'padding: 2px; background-color: white';

            var div = this.div_ = document.createElement('div');
            div.appendChild(span);
            div.style.cssText = 'position: absolute; display: none';
         };
         Label.prototype = new google.maps.OverlayView;

         // Implement onAdd
         Label.prototype.onAdd = function() {
            var pane = this.getPanes().overlayLayer;
            pane.appendChild(this.div_);

            // Ensures the label is redrawn if the text or position is changed.
            var me = this;
            this.listeners_ = [
            google.maps.event.addListener(this, 'position_changed',
            function() { me.draw(); }),
            google.maps.event.addListener(this, 'text_changed',
            function() { me.draw(); })
            ];
         };

         // Implement onRemove
         Label.prototype.onRemove = function() {
            this.div_.parentNode.removeChild(this.div_);

            // Label is removed from the map, stop updating its position/text.
            for (var i = 0, I = this.listeners_.length; i < I; ++i) {
               google.maps.event.removeListener(this.listeners_[i]);
            }
         };

         // Implement draw
         Label.prototype.draw = function() {
            var projection = this.getProjection();
            var position = projection.fromLatLngToDivPixel(this.get('position'));

            var div = this.div_;
            div.style.left = position.x + 'px';
            div.style.top = position.y + 'px';
            div.style.display = 'block';

            this.span_.innerHTML = this.get('text').toString();
         };



      </script>
   </head>
   <body onload="initialize()">
      <div id="map_canvas" style="width:100%; height:100%"></div>
   </body>
</html>

