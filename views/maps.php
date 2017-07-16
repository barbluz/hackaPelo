<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      .wrap { max-width: 75em; min-height: 40em; height:100%; width:100%; margin: 0 auto; padding-top: 2.5%;}
      #map-canvas { height: 90%; }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true">
    </script>
    <script type="text/javascript">
      var map;
      var centerPos = new google.maps.LatLng(-12.970382 -38.512382);
      var zoomLevel = 12;
      function initialize() {
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions );
        var locations = [
          ['Igreja SF', -37.808204, 144.855579],
          ['Ordem 3 SF', -37.675648, 145.026125],
          ['Museu Afro-BR', -37.816935, 144.966877],
          ['Elevador lacerda', -37.818714, 145.036494],
          ['Monumento da cruz caída', -37.793834, 144.987018],
        ];

        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map
          });
        }
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  <button onclick="console.log( 'Lat &amp;amp; Long: ' + map.getCenter().k + ',' + map.getCenter().A + ' Zoom: ' + map.getZoom() );">Get Map Co-ords</button>
  <div class="wrap">
    <div id="map-canvas"></div>
  </div>
  </body>
</html>