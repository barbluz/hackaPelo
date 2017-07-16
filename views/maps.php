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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvalcj1Lb1RadLXvtUpxkIuI5BxPaQ4PA&AIzaSyCvalcj1Lb1RadLXvtUpxkIuI5BxPaQ4PA?sensor=true">
    </script>
    <script type="text/javascript">
      var map;
      var centerPos = new google.maps.LatLng(-12.9719607,-38.5281963);
      var zoomLevel = 14;
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-12.9732258,-38.5112981),
          zoom: 15
        };
        map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions );
        var locations = [
          ['Igreja SF', -12.974413, -38.508864],
          ['Plano inclinado', -12.972118, -38.510504],
          ['Museu Afro-BR', -12.972738, -38.509878],
          ['Elevador lacerda', -12.974463, -38.512979],
          ['Monumento da cruz caída', -12.973407, -38.511670],
        ];

        var look = [
          [0],
          [0],
          [0],
          [0],
          [0],
        ];

      for (i = 0; i < locations.length; i++) { 
        var lat;
        var lng;
        function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 6
          });
          var infoWindow = new google.maps.InfoWindow({map: map});

          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
              };

              infoWindow.setPosition(pos);
              infoWindow.setContent('Location found.');
              map.setCenter(pos);
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
            });
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
          infoWindow.setPosition(pos);
          infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
        }

        if ((lat == locations[i][1]) && (lng == locations[i][2])) { 
          look[i] = 1;
        }
        if (look[i] == 1) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map
          });
        }
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