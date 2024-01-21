@extends('layouts.app-master')
@section('content')
<link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! url('assets/bootstrap/css/bootstrap.bundle.min.css') !!}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="index-style/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="index-style/main.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
.card {
    position: relative;
    min-width: 300px;
    height: auto;
    overflow: hidden;
    border-radius: 15px ;
    margin: 0 auto;
    padding: 40px 20px;
    box-shadow: 0 10px 15px rgba(0,0,0,0.3);
    transition: .5s;
  }
  .card:hover {
    transform:scale(1.025);
  }
  .card:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 40%;
    background: rgba(255, 255, 255, .1);
    z-index: 1;
    transform: skewY(-5deg) scale(1.5);
  }
  @media (max-width: 800px) {
    .column {
      flex: 50%;
      max-width: 50%;
    }
  }

  @media (max-width: 600px) {
   .column {
      flex: 100%;
      max-width: 100%;
    }
  }
        </style>
<main>
    @guest
    <div class="bg-light p-5 rounded">
        <h1>Silahkan <a href="{{ route('login.show') }}">Login</a> terlebih dahulu untuk mencoba fitur ini!</h1>
    </div>
    @endguest
    @auth
    <h1 class="text-center mt-3">Pembelian Tiket Pesawat</h1>
    <!-- Section: Search -->
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 p-5 rounded">
        <label for="search-inputA">Tentukan Kota Awal</label>
        <input type="search" class="form-control form-control-dark"
        placeholder="Pasar Kebayoran Lama, Stasiun Kebayoran Lama etc..." aria-label="Search" id="search-inputA">
        <label for="search-input">Tentukan Kota Tujuan</label>
        <input type="search" class="form-control form-control-dark"
        placeholder="Universitas Pertamina, Gandaria City etc..." aria-label="Search" id="search-input">
    </form>

    <div class="m-4 w-100" style="color: black;">
        <div class="d-flex gap-4">
            <div class="d-flex flex-column w-100 mt-4 pb-4">
                <!-- Section: tiket form -->
                <div class="card m-0" style="max-width: 1460px; align-item: center; padding: 10px;">
                              <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="/images/plane.jpeg" alt="Flying Plane" class="img-fluid h-100 py-3 px-1 rounded-start"/>
                                  </div>
                                  <div class="col-md-8">
                                      <div class="card-body h-100">
                                          <form action="" method="get">
                                              <div class="form-floating my-4">
                                                  <input type="date" class="form-control" id="tanggalPesawat">
                                                  <label for="tanggalPesawat">Tanggal Keberangkatan</label>
                                                </div>
                                                <div class="form-floating mb-4">
                                                    <input type="number" class="form-control" id="penumpangPesawat">
                                                    <label for="penumpangPesawat">Jumlah Penumpang</label>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-success" type="submit">Pesan Tiket</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-block w-100" style="max-width: 420px;">
                                        <!-- Section: Map -->
                                        <div id="map"></div>
                                        <div id="duration-info"></div>
                                        <div id="mode-buttons">
                                            <button class="btn btn-dark mb-2 mx-2"onclick="changeTravelMode('DRIVING')">check Route</button>
                                         </div>
                                    </div>
                    </div>
                    
                    <!-- Import jQuery and Materialize.js -->
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="index-style/materialize.min.js"></script>
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCc3HLGNRKYZnvcv2XFQzBfyij2y6Vplyc&libraries=places&callback=initMap">
    </script>
    <script>
        var from;
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
                    from = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
    
                    map.setCenter(from);
    
                    var userMarker = new google.maps.Marker({
                        position: from,
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
            var searchInputA = document.getElementById('search-inputA');
            var searchBoxA = new google.maps.places.SearchBox(searchInputA);
    
            searchBoxA.addListener('places_changed', function() {
                var placesA = searchBoxA.getPlaces();
    
                if (placesA.length == 0) {
                    return;
                }
    
                // Ambil tempat pertama dari hasil pencarian
                from= placesA[0].geometry.location;
            });
    
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
                calculateAndDisplayRoute(from, destination, selectedMode);
    
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
                calculateAndDisplayRoute(from, lastDestination, selectedMode);
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
</main>
@endsection