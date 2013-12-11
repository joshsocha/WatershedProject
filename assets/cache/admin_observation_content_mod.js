var map;
function initialize() {
	if(document.getElementById('map-canvas') == null) return;

	var lat = 24.846565;
	var lng = -96.591797;

	// TODO: Move the grunt work to a global JS file, and hook this to it
	var lat2 = parseFloat(document.getElementById('observation_location_lat').value);
	var lng2 = parseFloat(document.getElementById('observation_location_long').value);
	if(!isNaN(lat2) && !isNaN(lng2)) {
		console.log("Retrieved stuff: " + lat2 + ", " + lng2);
		lat = lat2;
		lng = lng2;
	}

	var mapOptions = {
		zoom: 4,
		center: new google.maps.LatLng(lat, lng)
	};
	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(lat, lng),
		map: map,
		draggable: true,
		title: "Drag me!" // Localize
	});

	google.maps.event.addListener(marker, 'dragend', function(obj){
		lat = marker.getPosition().lat();
		lng = marker.getPosition().lng();
		document.getElementById('observation_location_lat').value = lat.toFixed(3);
		document.getElementById('observation_location_long').value = lng.toFixed(3);
	});
	//marker.setMap(null); // Removes marker from map
}

google.maps.event.addDomListener(window, 'load', initialize);
