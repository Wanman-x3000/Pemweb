<!-- Page Content -->



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
    <h1>Galeri Wisata</h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-start">

        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/tour-bandung.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/tour-jogja.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/tour-bali.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/tour-banyuwangi.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/tour-bromo.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/trip-lombok.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/trip-malang.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/trip-solo.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://salsawisata.com/wp-content/uploads/2023/06/trip-surabaya.webp" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
            </a>
        </div>
    </div>
</div>
@endauth
@endsection