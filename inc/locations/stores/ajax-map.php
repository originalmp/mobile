<!-- START of ./inc/locations/stores/ajax-map.php  -->

    <link href="../../../css/main.css" rel="stylesheet" type="text/css">
<link href="../../../css/media.css" rel="stylesheet" type="text/css">

    <div id="map"></div>
    <script>
      function initMap() {
  var locc = new google.maps.LatLng(43.3931612,-79.7943947,21);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: locc
        });
		var customMarker = 'http://www.canadacomputers.com/images/lo/marker.png';
		var marker = new google.maps.Marker({
          position: locc,
          icon: customMarker,
		  title: '2020 Appleby Line, Burlington, Ontario L7L-6M6, Canada', 
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC89Y2zGm4SsUtmJSpJq7hEqlG1MSjriIA&callback=initMap">
       </script>

<!-- END ./inc/locations/stores/ajax-map.php -->