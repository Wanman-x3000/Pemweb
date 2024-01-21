@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Selamat Datang!</h1>
    <p class="lead">Silahkan nikmati semua fitur yang ada.</p>
    @endauth

    @guest
    <h1>Halaman Tamu</h1>
    <p class="lead">Silahkan login untuk menikmati semua fitur!.</p>
    @endguest

    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{!! url('images/lokasi.jpg') !!}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tujuan</h5>
                    <p class="card-text">Destinasi liburan impian Anda di sini! Dari pantai yang indah hingga
                        gunung yang menakjubkan, beragam tempat yang siap untuk dijelajahi.</p>
                    <a href="{{route('func.geo')}}" class="btn btn-primary">Jelajahi Lebih Lanjut</a>
                </div>

            </div>
        </div>


        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{!! url('images/store.jpg') !!}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Buah Tangan</h5>
                    <p class="card-text">Bawa pulang kenangan spesial dari perjalanan Anda! Temukan toko-toko lokal yang
                        menyediakan buah tangan unik dan menarik. </p>
                    <a href="{{route('func.shop')}}" class="btn btn-primary">Temukan Buah Tangan</a>
                </div>

            </div>
        </div>

        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{!! url('images/transport.jpg') !!}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Perjalanan</h5>
                    <p class="card-text">Siap untuk petualangan? Temukan layanan transportasi yang nyaman dan andal
                        untuk menjelajahi destinasi Anda.</p>
                    <a href="{{route('func.menuPerjalanan')}}" class="btn btn-primary">Pesan Transportasi</a>
                </div>

            </div>
        </div>
    </div>
    @endsection