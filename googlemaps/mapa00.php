<html>
   <head>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
         function initialize(){
            
            var latlng = new google.maps.LatLng(-22.3148441, -49.0617709);
            
            var myOptions = {
               zoom:8,
               center:latlng,
               mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            
            var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
         }
      </script>
   </head>
   <body onload="initialize()">
      <div id="map_canvas" style="height:100%; width:100%"></div>
   </body>
</html>