<html>
   <head>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
         function inicializar(){// Creating a map
            var map = new google.maps.Map(document.getElementById('map_canvas'), {
               zoom: 10,
               center: new google.maps.LatLng(-22.3148441, -49.0617709),
               mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            // Creating a marker and positioning it on the map
            var marker = new google.maps.Marker({
               position: new google.maps.LatLng(-22.3148441, -49.0617709),
               title:"Bauru",
               visible:true,
               map: map
            });
            
            var marker = new google.maps.Marker({
               position: new google.maps.LatLng(-22.8903957, -48.4553086),
               title: "Botucatu",
               map: map
            });
         }

      </script>
   </head>
   <body onload="inicializar()">
      <div id="map_canvas" style="height:100%; width:100%"></div>
   </body>
</html>