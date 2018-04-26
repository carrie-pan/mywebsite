<?php
require_once("include/config.php");
$pageId="ajax";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include_once("include/link_script.php"); ?>
    <script type="text/javascript" src="js/jquery.slidertron-1.3.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
    <style type="text/css">
      #map_canvas { z-index:1; }
    </style>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
	<script type="text/javascript">
      function initialize() {
		var pyrmont = new google.maps.LatLng(25.041171,121.565228);
        var mapOptions = {
          center: pyrmont,
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

		var marker = new google.maps.Marker({
			position: map.getCenter(),
			map: map,
			title: 'Click to zoom'
		});

		google.maps.event.addListener(map, 'center_changed', function() {
			// 3 seconds after the center of the map has changed, pan back to the
			// marker.
			window.setTimeout(function() {
				map.panTo(marker.getPosition());
			}, 3000);
		});

		google.maps.event.addListener(marker, 'click', function() {
			map.setZoom(16);
			map.setCenter(marker.getPosition());
		});


		var request = {
			location: pyrmont,
			radius: '500',
			types: ['store']
		  };

		service = new google.maps.places.PlacesService(map);
		service.search(request, callback);

		function callback(results, status) {
		  if (status == google.maps.places.PlacesServiceStatus.OK) {
			for (var i = 0; i < results.length; i++) {
			  var place = results[i];
			  createMarker(results[i]);
			}
		  }
		}


		function createMarker(place) {
		  var placeLoc = place.geometry.location;
		  var marker = new google.maps.Marker({
			map: map,
			position: place.geometry.location
		 });
		}

	  }
    </script>

</head>
<body onload="initialize()">
    <?php include_once("header.php"); ?>
        <div class="container">
            <div class="page-header"></div>
        </div>
        <div id="map_canvas" class="container"  style="width: 800px; height: 500px"></div>
    <?php include_once("footer.php"); ?>
</body>
</html>