var latitude;
var longitude;
function generateMap(lat,lng){
 latitude=lat;
 longitude=lng;
 
}
function initMap() {
	console.log('show:'+latitude);
	var uluru = {lat: latitude, lng: longitude};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 5,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}
