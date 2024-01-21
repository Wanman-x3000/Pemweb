@extends('layouts.app-master')

@section('content')

<link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! url('assets/bootstrap/css/bootstrap.bundle.min.css') !!}" rel="stylesheet">
<div class="container">

    @guest
    <div class="bg-light p-5 rounded">
        <h1>Silahkan <a href="{{ route('login.show') }}">Login</a> terlebih dahulu untuk mencoba fitur ini!</h1>
    </div>
    @endguest

    @auth
    <h1>Tempat Wisata Favorit</h1>

    <!-- Carousel wrapper -->
    <div id="carouselImageExample" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselImageExample" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselImageExample" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselImageExample" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <iframe width="100%" height="800" src="https://www.youtube.com/embed/q6yOPglslqo?autoplay=1&mute=1"
                    frameborder="0" allowfullscreen></iframe>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bromo, Jawa Timur</h5>
                    <p>Menyaksikan keindahan alam Bromo yang memukau di Jawa Timur!</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <iframe width="100%" height="800" src="https://www.youtube.com/embed/8Enz4caSlfI?autoplay=1&mute=1"
                    frameborder="0" allowfullscreen></iframe>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Raja Ampat, Papua Barat</h5>
                    <p>Menikmati keindahan alam bawah laut yang luar biasa di Raja Ampat, Papua Barat!</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="https://c0.wallpaperflare.com/preview/951/206/340/indonesia-komodo-island-lizards-island.jpg"
                    class="d-block w-100" alt="Pulau Komodo, Nusa Tenggara Timur">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pulau Komodo, Nusa Tenggara Timur</h5>
                    <p>Menikmati keindahan Pulau Komodo dan keunikan habitat komodo di Nusa Tenggara Timur!</p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImageExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselImageExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
</div>
@endauth
@endsection
