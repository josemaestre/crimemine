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

        <h1>Add Vendor, Location1111</h1>
        {{--{{Form::open(array('url'=>'/vendor/add', 'files'=>true))}}--}}
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control input-sm" name="title">
        </div>

        <div class="form-group">
            <label for="">Busqueda</label>
            <input type="text" class="form-control pull-right" id="searchmap">

            <div id="map-canvas"></div>
        </div>

        <div class="form-group">
            <label for="">Lat</label>
            <input type="text" class="form-control pull-right" name="lat" id="lat">
        </div>

        <div class="form-group">
            <label for="">Lng</label>
            <input type="text" class="form-control pull-right" name="lng" id="lng">
        </div>

        <button class="btn btn-sm btn-danger">Save</button>
        {{--{{Form::close()}}--}}


</div>

<script>
    //geo_position_js.init();
    var lat = 0;
    var lon = 0;
    var mapOptions ="";
    //navigator.geolocation.getcurrentposition();
    //var latLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
    function foundLoc(pos) {
         lat = pos.coords.latitude;
         lon = pos.coords.longitude;

        mapOptions = {
            center:new google.maps.LatLng(lat, lon), zoom:12,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        mostrarMapa();
        marcador();
        //alert('Found location: ' + lat + ', ' + lon);
    }
    function noLoc() {

        alert('Could not find location');
    }
    navigator.geolocation.getCurrentPosition(foundLoc, noLoc);

    //alert('las opciones on ' + mapOptions);
    function mostrarMapa() {

         map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {
                lat: lat,
                lng: lon
            },

            zoom: 15
        });
    }
    //alert('Found location 2: ' + lat + ', ' + lon);

    function marcador() {

         marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lon
            },


            map: map,
            draggable: true
        });
    }
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

    google.maps.event.addListener(marker,'position_changed',function(){

        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();

        $('#lat').val(lat);
        $('#lng').val(lng);

    });

</script>