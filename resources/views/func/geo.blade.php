@extends('layouts.app-master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! url('assets/bootstrap/css/bootstrap.bundle.min.css') !!}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="index-style/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="index-style/main.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<style>
#map {
    height: 400px;
    width: 100%;
    margin-bottom: 10px;
}

#search-input {
    margin-top: 10px;
    padding: 5px;
}

#duration-info {
    font-weight: bold;
    margin-top: 10px;
}

#mode-buttons {
    margin-top: 10px;
}
</style>
</head>


<body>
    @guest
    <div class="bg-light p-5 rounded">
        <h1>Silahkan <a href="{{ route('login.show') }}">Login</a> terlebih dahulu untuk mencoba fitur ini!</h1>
    </div>
    @endguest

    @auth
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 p-5 rounded">
        <input type="search" class="form-control form-control-dark"
            placeholder="Universitas Pertamina, Gandaria City etc..." aria-label="Search" id="search-input">
    </form>
    <!-- Section: Search -->

    <!-- Section: Map -->
    <div id="map"></div>
    <div id="duration-info"></div>
    <div id="mode-buttons">
        <button class="btn btn-dark mb-2 mx-2" onclick="changeTravelMode('WALKING')">Walking</button>
        <button class="btn btn-dark mb-2 mx-2"onclick="changeTravelMode('DRIVING')">Driving</button>
        <!-- <button onclick="changeTravelMode('BICYCLING')">Bicycling</button> -->
        <button class="btn btn-dark mb-2 mx-2" onclick="changeTravelMode('TRANSIT')">Transit</button>
    </div>




    <!-- Import jQuery and Materialize.js -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="index-style/materialize.min.js"></script>
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCc3HLGNRKYZnvcv2XFQzBfyij2y6Vplyc&libraries=places&callback=initMap">
    </script>
    <script>
    var userLocation;
    var map;
    var directionsService;
    var directionsRenderer;
    var durationInfo;
    var selectedMode = 'WALKING';
    var lastDestination;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15
        });

        directionsService = new google.maps.DirectionsService();
        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);

        durationInfo = document.getElementById('duration-info');

        // Mendapatkan lokasi pengguna
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                map.setCenter(userLocation);

                var userMarker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: 'Your Location'
                });
            }, function() {
                handleLocationError(true, map.getCenter());
            });
        } else {
            // Browser tidak mendukung geolocation
            handleLocationError(false, map.getCenter());
        }

        var searchInput = document.getElementById('search-input');
        var searchBox = new google.maps.places.SearchBox(searchInput);

        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Ambil tempat pertama dari hasil pencarian
            var destination = places[0].geometry.location;

            // Hapus rute dan reset estimasi waktu sebelumnya
            directionsRenderer.setMap(null);
            durationInfo.innerHTML = '';

            // Menampilkan jalur dari pengguna ke tujuan dengan mode saat ini
            calculateAndDisplayRoute(userLocation, destination, selectedMode);

            // Simpan destinasi terakhir
            lastDestination = destination;
        });
    }

    // Fungsi untuk menghitung dan menampilkan rute
    function calculateAndDisplayRoute(origin, destination, mode) {
        directionsRenderer.setMap(map);
        directionsService.route({
            origin: origin,
            destination: destination,
            travelMode: mode
        }, function(result, status) {
            if (status == 'OK') {
                directionsRenderer.setDirections(result);

                // Tampilkan estimasi waktu
                var duration = result.routes[0].legs[0].duration.text;
                durationInfo.innerHTML = 'Estimated Duration (' + mode + '): ' + duration;
            } else {
                console.error('Error in displaying directions:', status);
            }
        });
    }

    // Fungsi untuk mengubah mode transportasi
    function changeTravelMode(mode) {
        selectedMode = mode;

        // Hapus rute dan reset estimasi waktu sebelumnya
        directionsRenderer.setMap(null);
        durationInfo.innerHTML = '';

        // Menampilkan jalur dari pengguna ke destinasi terakhir dengan mode saat ini
        if (lastDestination) {
            calculateAndDisplayRoute(userLocation, lastDestination, selectedMode);
        }
    }

    // Menangani kesalahan geolocation
    function handleLocationError(browserHasGeolocation, pos) {
        var infoWindow = new google.maps.InfoWindow({
            content: browserHasGeolocation ?
                'Error: The Geolocation service failed.' : 'Error: Your browser doesn\'t support geolocation.'
        });

        var userMarker = new google.maps.Marker({
            position: pos,
            map: map,
            title: 'Error!'
        });

        userMarker.addListener('click', function() {
            infoWindow.open(map, userMarker);
        });
    }

    $(document).ready(function() {
        // INIT sidebar
        $(".button-collapse").sidebar();

        //INIT SLIDER
        $(".slider").slider({
            indicators: false,
            height: 500,
            transition: 500,
            interval: 6000
        });

        //INIT SCROLLSPY
        $(".scrollspy").scrollSpy();
    });

    function login() {
        alert("please sign in to view in details.");
    }
    </script>
    @endauth
</body>


</html>
@endsection