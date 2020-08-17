<?php include "../config/paths.php"?>
<!doctype html>
<html>
<head>
	<title>DVD Planet Store</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css" /> 
    
    <script type = "text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
   <script type = "text/javascript">
      function initialize() {
         var myLatLng = new google.maps.LatLng (-28.168, 153.518);
         var mapCanvas = document.getElementById('map-canvas');
         var mapOptions = {
            center: myLatLng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
         }
         var map = new google.maps.Map(mapCanvas, mapOptions);
         var marker = new google.maps.Marker({
            position: myLatLng,
            map: map});
      }
      google.maps.event.addDomListener(window, 'load', initialize);
   </script> 
 
</head>
<body>


<header>	
	<h1>DVD Planet Store</h1>
	<div id="menutop">
		<div>
        
        
        <nav>
   <ul>
			<li id ="indexNav"><a href = "home.php">Home</a></li>
			<li id ="contactNav"><a href = "contact.php">Contact</a></li>
			<li id ="techZoneNav"><a href = "techzone.php">TechZone</a></li>
			<li id ="movieZoneNav"><a href = "movieZone.php?search=show_all">MovieZone</a></li>
			<li id ="joinNav"><a href = "join.php">Join</a></li>
			</ul>
</nav> 
			
		</div>
	</div>
</header> 
	
 
<div id="content">
	
	