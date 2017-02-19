<style>
    #map-canvas{
        width: 350px;
        height: 250px;
    }
</style>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
        type="text/javascript"></script>

<div class="container">
    <div class="col-sm-4">
        <h1>Add Vendor, Location</h1>
        {{Form::open(array('url'=>'/vendor/add', 'files'=>true))}}
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control input-sm" name="title">
        </div>

        <div class="form-group">
            <label for="">Map</label>
            <input type="text" id="searchmap">
            <div id="map-canvas"></div>
        </div>

        <div class="form-group">
            <label for="">Lat</label>
            <input type="text" class="form-control input-sm" name="nu_lat" id="nu_lat">
        </div>

        <div class="form-group">
            <label for="">Lng</label>
            <input type="text" class="form-control input-sm" name="nu_long" id="nu_long">
        </div>

        <div class="form-group">
            <label for="">google address</label>
            <input type="text" class="form-control input-sm" name="g_address" id="g_address">
        </div>

        <button class="btn btn-sm btn-danger">Save</button>
        {{Form::close()}}
    </div>

</div>

<script>
var lat ;
var lon ;
var marker ;
var map;
var geocoder = new google.maps.Geocoder();
var g_address;
//var infowindow1 = new google.maps.InfoWindow({ content: 'Hola, ¡aqui!' });
var results;
infowindow = new google.maps.InfoWindow({ content: 'Hola, ¡estoy aqui!' });


function codeAddress(lat,lon) {

            //var address = document.getElementById("address").value; // get the address
            // geocode the address and call an anonymous function as a callback
             //infowindow = new google.maps.InfoWindow({ content: 'Hola, ¡estoy en Sevilla!' + lat });
             //alert('hssss');
            var yourLocation = new google.maps.LatLng(lat, lon);
            geocoder.geocode({ 'latLng': yourLocation }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) { // if everything went OK
                    map.setCenter(results[0].geometry.location); // set new center
                    marker.setPosition(results[0].geometry.location); // re-position the marker
                    //marca();

                    //console.info(results[0].formatted_address);
                    //console.info('tratando de que de :' + results[0].long_name);
                       //console.info('la direccion es ' +  results[0].address_components.component.short_name);
                    //infowindow.setContent(results[0].address_components[0].long_name); // set content of the info window to the name of the place
                    infowindow.setContent('la ubicacion es ' + results[0].formatted_address); // set content of the info window to the name of the place
                    g_address = results[0].formatted_address;
                     $('#g_address').val(g_address);
                } else {
                    alert("Geocode was not successful for the following reason: " + status); // ugly alert
                }
            });
            

        }

function marca() {
//infowindow = new google.maps.InfoWindow({ content: 'Hola, ¡estoy aqui!' });
console.info('Marancando....');
	 marker = new google.maps.Marker({
		position: {
			lat: lat,
        	lng: lon
		},
		map: map,
		draggable: true
	});
infowindow.open(map, marker);
codeAddress(lat,lon);
}


function generarMap(position) {
  lat = position.coords.latitude;
  lon = position.coords.longitude;

	 map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
			    lat: lat,
        	lng: lon
		},
		zoom:15
	});



marca();

google.maps.event.addListener(marker, 'dragend', function() {
  var lat = marker.getPosition().lat();
  var lng = marker.getPosition().lng();
   $('#g_address').val(g_address);
  //alert('Lat: ' + lat + 'lon: ' +lng )
  codeAddress(lat,lng);
  //infowindow.open(map, marker);
});



google.maps.event.addListener(marker,'position_changed',function(){

  var lat = marker.getPosition().lat();
  var lng = marker.getPosition().lng();
  $('#nu_lat').val(lat);
  $('#nu_long').val(lng);
});

}


function initMap(){
navigator.geolocation.getCurrentPosition(generarMap);
}

//generarMap(position);

//marca();
initMap();
//function searchBox() {
	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
	google.maps.event.addListener(searchBox,'places_changed',function(){
		var places = searchBox.getPlaces();
		var bounds = new google.maps.LatLngBounds();
		var i, place;
		for(i=0; place=places[i];i++){
  			bounds.extend(place.geometry.location);
  			marker.setPosition(place.geometry.location); //set marker position new...
  		}
  		map.fitBounds(bounds);
  		map.setZoom(15);
	});





</script>
