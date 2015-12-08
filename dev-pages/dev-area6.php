<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Wright-Devs - Development Area</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
        <link href="assets/css/clock.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9_eubdf0kjY2lVzqnDRnEmACsb3CXt80" type="text/javascript"></script>
        <script type="text/javascript" src="zepto.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
  </head>

			<script type="text/javascript">
    			var customIcons = {
      				 GP: {
       					 icon: 'images/orange_MarkerG.png'
      					},
      				OrthoSurg: {
        						icon: 'images/brown_MarkerO.png'
      							},
     				 AandECons: {
      							 icon: 'images/blue_MarkerA.png'   
      							},
     				 ENT: {
       						 icon: 'images/green_MarkerE.png'
     					 },
    					  GenSurg: {
        							  icon: 'images/blue_MarkerG.png'
     							 },
      					AnaesPain: {
        							  icon: 'images/paleblue_MarkerA.png'
     								 }
   						 };
    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(54.13378, -7.412939),
        zoom: 5,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;
	  

      // Change this depending on the name of your PHP file
      downloadUrl("pages/main/experts/pages/testxmlphp.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }
	function resizeMap(center) {
			google.maps.event.addDomListener(window, 'resize', initialize)(function() {
			var center= map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
																					});
	}
									

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>

  </head>

  <body onLoad="load()">
  	<div id="map" style="height: 500px; width: 100%;"></div>
  </body>

</html>