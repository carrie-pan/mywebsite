<?php 
require_once("include/config.php"); 
$pageId="home";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
 
Name       : Escalier
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131022
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>Example Website</title>
    <meta name="keywords" content="Hsiu Pan = Example Website" />
    <meta name="description" content="Hsiu Pan = Example Website" />
    <link rel="shortcut icon" type="image/png" href="emgz/hsiu.png" />
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.slidertron-1.3.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel='stylesheet' href='css/styles.css' type='text/css' media='all' />
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
      <div id="map_canvas" class="container" style="width:100%; height:75%"></div>
   <?php include_once("footer.php"); ?>
</body>
</html>	