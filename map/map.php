<?php
session_start();
if (!isset($_SESSION['username'])){
		header('location:../userregistration/login.php');
}
else {}
?>

<html>
	<head>
		<title>Travel NOW</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyCIV8hps_XhSyuRP4yHYcQOfvD1y1-y3HM"  type="text/javascript"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/header.css">
		<link rel="stylesheet" href="map.css">
		<link rel="stylesheet" href="../css/mainbody.css">
		<link rel="icon" href="../img/Polar_Bear-512.png">
		<style>
			* {
				box-sizing: border-box;
			}
			.col-md-6{
				float: left;
				width: 50%;
				margin: auto;
			}
			#map {
				float: right;
				height: 60%;
				width: 50%;
				margin: auto;
			}
		</style>
		<script>
			$("#result").show();
		</script>
	</head>
	<body>
		<div id="menuwrapper">
                <div id="menuwrap">
                    <div id="top_menu">
                        <input type='checkbox'/>
                        <label>
                            <i class='icon-reorder'></i>
                            <span>Navigation</span>
                        </label>
                        <ul>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../index.php">G7 GROUP</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../index.php#Service">Service</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../about/about.php">About</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../map/map.php">Travel NOW</a> 
                            <?php if (!isset($_SESSION['username'])):?>
                                <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                    <a href="../userregistration/login.php">Log In</a>
                                </li>
                            <?php else:?>
                                <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                    <a>Welcome <?php echo $_SESSION['username']; ?></a>
                                    <ul class="menus">
                                        <li>
                                            <a href="">Profile</a>
                                        </li>
                                        <li>
                                            <a href="">Setting</a>
                                        </li>
                                        <li>
                                            <a href="../userregistration/logout.php">Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif;?>
                            <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="">Help Centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		<div class="containermap">
		<div class="column">
		<div class="col-md-6">
		<form id="distance_form">
		<div class="form-group">
			<label>Origin: </label> 
			<input class="form-control" id="from_places" placeholder="Enter a location"/> 
			<input id="origin" name="origin" required="" type="hidden" />
		</div>

		<div class="form-group">
			<label>Destination: </label> 
			<input class="form-control" id="to_places" placeholder="Enter a location"/> 
			<input id="destination" name="destination" required="" type="hidden" />
		</div>
		<input class="btn btn-primary" type="submit" value="Calculate" /></form>
		<div id="result">
		<ul class="list-group">
		<form id = "distance_result">
			<li  class="list-group-item d-flex justify-content-between align-items-center">
				Distance in Kilometer:
				<span id='in_Kilometer' class="badge badge-primary badge-pill"></span>
			</li>
			<li  class="list-group-item d-flex justify-content-between align-items-center">
				Duration(min):
				<span id="duration_text" class="badge badge-primary badge-pill"></span>
			</li>
			<li  class="list-group-item d-flex justify-content-between align-items-center">
				FROM:
				<span id="from" class="badge badge-primary badge-pill"></span>
			</li>
			<li  class="list-group-item d-flex justify-content-between align-items-center">
				TO:
				<span id="to" class="badge badge-primary badge-pill"></span>
			</li>
			<li  class="list-group-item d-flex justify-content-between align-items-center">
				COST(VND):
				<span id="cost" class="badge badge-primary badge-pill"></span>
			</li>
			<button onclick="myFunction()" type="button" id = "book" class="btn btn-primary" data-toggle="modal" data-target="#ModalLong" style="margin-top: 2%;">
				BOOK 
			</button>
		</form>
		</ul>
		</div>
		</div>
		<div id="map"></div>
		</div>
		</div>
		
		<div class="modal fade" id="ModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="ModalTitle">Booking Information</h5>
				<button type="button" class="Cancel" data-dismiss="modal" aria-label="Cancel">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				Do you want to book now?
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLong2" data-dismiss="modal">Continue</button>
			  </div>
			</div>
		  </div>
		</div>
		<div class="modal fade" id="ModalLong2" tabindex="-1" role="dialog" aria-labelledby="ModalTitle2" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="ModalTitle2">Booking Information</h5>
				<button type="button" class="Cancel" data-dismiss="modal" aria-label="Cancel">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<p>Booking successfully! </p>
				<p>Your driver will come soon. Thank you for using our services. <p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			  </div>
			</div>
		  </div>
		</div>
		<div class="footer">
            <div class="footercontain1">
                <section class="column">
                    <div class="tf1">
                        <p>We're here to help!</p>
                    </div>
                    <div class="tf2 texta_white">
                        <p>Support is just a few taps away. You can also get your questions answered by using
                        our help section.</p>
                        <a href="">Learn More</a>
                    </div>
                </section>
            </div>
            <div class="footercontain2">
                <section class="column">
                    <div class="tf3" style="flex-grow: 2;">
                        <h1>G7 GROUP</h1>
                        <p>Somewhere in Vietnam.</p>
                    </div>
                    <div class="tf3 texta_many">
                        <h1>COMPANY</h1>
                        <a href="../aboutabout.php">About us</a><br><br>
                        <a href="">Newsroom</a><br><br>
                        <a href="">Blog</a><br><br>
                        <a href="">Careers</a><br><br>
                        <a href="">Press</a>
                    </div>
                    <div class="texta_many tf3">
                        <h1>SERVICES</h1>
                        <a href="">G7 Taxi</a><br><br>
                        <a href="">G7 Freight</a><br><br>
                        <a href="">G7 Motorbike</a><br><br>
                        <a href="">G7 for Business</a><br><br>
                        <a href="">G7 Air</a>
                    </div>
                </section>
            </div>
            <div class="footercontain3">
                <section class="column">
                    <div class="tf3">
                        <p>Best display on 1080p 16: 9 screen, latest Chrome browser, not supported on mobile.<br>
                        G7 GROUP © 2018 Designed by Gruppe Neun.</p>
                    </div>
                    <div class="texta_line textspacingend tf3">
                        <p><a href="../about/privacy.html">Privacy</a>
                        <a href="">Accessibility</a>
                        <a href="">Terms</a></p>
                    </div>
                </section>
            </div>
        </div>
	
		<script>
			function myFunction() {
				var origin = document.getElementById("from_places").value;
				var destination = document.getElementById("to_places").value;
				if(origin == "" || destination == ""){
					alert('You must fill the information fully');
					window.location.href = 'map.php'; //thay bang dia chi cua may ong
				}
			};
			$(function() {
				var directionsService = new google.maps.DirectionsService;
				var directionsDisplay = new google.maps.DirectionsRenderer;
				var mapDiv = document.getElementById('distance_form');
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 7,
				  center: {lat: 21.0031177, lng: 105.82014079999999}
				});
				directionsDisplay.setMap(map);
				var onChangeHandler = function() {
				  calculateAndDisplayRoute(directionsService, directionsDisplay);
				};
				document.getElementById('from_places').addEventListener('change', onChangeHandler);
				document.getElementById('to_places').addEventListener('change', onChangeHandler);
				
				function calculateAndDisplayRoute(directionsService, directionsDisplay) {
					directionsService.route({
					  origin: document.getElementById('from_places').value,
					  destination: document.getElementById('to_places').value,
					  travelMode: 'DRIVING'
					}, function(response, status) {
					  if (status === 'OK'){
						directionsDisplay.setDirections(response);
						}
						else{
						}
					});
				}
				
				google.maps.event.addDomListener(mapDiv, 'click', function () {
					var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
					var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));
					google.maps.event.addListener(from_places, 'place_changed', function () {
						var from_place = from_places.getPlace();
						var from_address = from_place.formatted_address;
						$('#origin').val(from_address);
					});
					google.maps.event.addListener(to_places, 'place_changed', function () {
						var to_place = to_places.getPlace();
						var to_address = to_place.formatted_address;
						$('#destination').val(to_address);
					});
				});
				
				function calculateDistance() {
					var origin = $('#origin').val();
					var destination = $('#destination').val();
					var service = new google.maps.DistanceMatrixService();
					service.getDistanceMatrix(
						{
							origins: [origin],
							destinations: [destination],
							travelMode: google.maps.TravelMode.DRIVING,
							unitSystem: google.maps.UnitSystem.METRIC,
							avoidHighways: false,
							avoidTolls: false
						}, output);
				}
				
				function output(response, status) {
					if (status != google.maps.DistanceMatrixStatus.OK) {
						$('#result').html(err);
					} else {
						var origin = response.originAddresses[0];
						var destination = response.destinationAddresses[0];
						if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
							$('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
						} else {
							var distance = response.rows[0].elements[0].distance;
							var duration = response.rows[0].elements[0].duration;
							var distance_in_Kilometer = distance.value / 1000; 
							var duration_text = duration.text;
							if(distance_in_Kilometer <= 10){
								var cost = distance_in_Kilometer * 15000.00;
							}
							if(distance_in_Kilometer > 10 && distance_in_Kilometer <=50){
								var cost = distance_in_Kilometer * 10000.00;
							}
							if(distance_in_Kilometer > 50){
								var cost = distance_in_Kilometer * 5000.00;
							}
					
							$('#in_Kilometer').text(distance_in_Kilometer.toFixed(2));
							$('#duration_text').text(duration_text);
							$('#from').text(origin);
							$('#to').text(destination);
							$('#cost').text(cost);		
						}
					}
				}
				
				$('#distance_form').submit(function(e){
					e.preventDefault();
					calculateDistance();
				});
			});
		</script>
		
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?AIzaSyBO_gWQShJe9MluRlkbIppibFnPMrVIRCY">
		</script>
	</body>
</html>