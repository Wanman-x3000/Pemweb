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
    .service-container {
    height: 600px;
    background: #f5f5f5;
}
.service-container .slide-service .item-service {
    width: 200px;
    height: 300px;
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    border-radius: 20px;
    background-position: 50% 50%;
    background-size: cover;
    display: inline-block;
    transition: 0.5s;
}

.slide-service .item-service:nth-child(1),
.slide-service .item-service:nth-child(2) {
    top: 0;
    left: 0;
    transform: translate(0, 0);
    border-radius: 0;
    width: 100%;
    height: 100%;
}

.slide-service .item-service:nth-child(3) {
    left: 55%;
    box-shadow: 0 30px 50px #505050;
}
.slide-service .item-service:nth-child(4) {
    left: calc(55% + 230px);
    box-shadow: 0 30px 50px #505050;
}
.slide-service .item-service:nth-child(5) {
    left: calc(55% + 460px);
    box-shadow: 0 30px 50px #505050;
}

/* here n = 0, 1, 2, 3,... */
.slide-service .item-service:nth-child(n + 6) {
    left: calc(55% + 690px);
    opacity: 0;
}

.item-service .content-service {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    padding-left: 100px;
    width: 75%;
    text-align: left;
    color: #eee;
    font-family: system-ui;
    display: none;
    background-image: linear-gradient(to right, black, rgba(0, 0, 0, 0));
}

.item-service .text {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 150px;
    background-image: linear-gradient(rgba(0, 0, 0, 0), rgb(0, 0, 0));
    animation: animate-reverse 1s ease-in-out 1 forwards;
}

.slide-service .item-service:nth-child(2) .content-service {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.slide-service .item-service:nth-child(2) .text {
    display: none !important;
}

.content-service .name {
    font-size: 40px;
    width: 300px;
    text-transform: uppercase;
    font-weight: bold;
    opacity: 0;
    animation: animate 1s ease-in-out 1 forwards;
}

.content-service .des {
    margin-top: 10px;
    width: 300px;
    margin-bottom: 20px;
    opacity: 0;
    animation: animate 1s ease-in-out 0.3s 1 forwards;
}

.content-service button {
    padding: 10px 20px;
    width: fit-content;
    border: none;
    cursor: pointer;
    opacity: 0;
    animation: animate 1s ease-in-out 0.6s 1 forwards;
}

@keyframes animate {
    from {
        opacity: 0;
        transform: translate(0, 100px);
        filter: blur(33px);
    }

    to {
        opacity: 1;
        transform: translate(0);
        filter: blur(0);
    }
}

@keyframes animate-reverse {
    from {
        opacity: 0;
        transform: translate(0, -100px);
        filter: blur(33px);
    }

    to {
        opacity: 1;
        transform: translate(0);
        filter: blur(0);
    }
}

.button {
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 20px;
}

.button button {
    width: 40px;
    height: 35px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    margin: 0 5px;
    border: 1px solid #000;
    transition: 0.3s;
}

.button button:hover {
    background: #ababab;
    color: #fff;
}

</style>
<main>
@guest
    <div class="bg-light p-5 rounded">
        <h1>Silahkan <a href="{{ route('login.show') }}">Login</a> terlebih dahulu untuk mencoba fitur ini!</h1>
    </div>
@endguest

@auth
<div  class="p-2 align-items-center justify-center gap-3" style="color: black;">
    <h1 class="p-2 d-flex align-items-center justify-center gap-3 mb-1">Holiyay</h1>
    <p class="desc-section fw-medium fs-5 pt-3">Holiyay menyediakan pembelian Tiket Perjalanan bus, kereta, shuttle bus dan pesawat tanpa ribet, mahal dan khawatir dengan Kami !</p>
</div>
<div class="position-relative container-lg p-0 overflow-hidden my-3 pt-5">

    <div class="service-container">

        <div class="slide-service">

            <div class="item-service" style="background-image: url(/images/plane2.jpg);">
                <div class="text d-flex align-items-end">
                    <div class="text-white p-2 px-3">
                        <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                        <h5 class="text-capitalize">Pemesanan Tiket Pesawat</h5>
                    </div>
                </div>
                <div class="content-service">
                    <div class="name text-capitalize">Pemesanan Tiket Pesawat</div>
                    <div class="des">Nikmati penerbangan tanpa membuat dompet menangis</div>
                    <button><a class="text-dark" href="/pesawat"> See More</a></button>
                </div>
            </div>
            <div class="item-service" style="background-image: url(/images/bus2.webp);">
                <div class="text d-flex align-items-end">
                    <div class="text-white p-2 px-3">
                        <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                        <h5 class="text-capitalize">Pemesanan Tiket Bus</h5>
                    </div>
                </div>
                <div class="content-service">
                    <div class="name text-capitalize">Pemesanan Tiket Bus</div>
                    <div class="des">Tenang menikmati perjalanan darat tanpa khawatir akan ketinggalan bus!</div>
                    <button><a class="text-dark" href="/bus"> See More</a></button>
                </div>
            </div>
            <div class="item-service" style="background-image: url(/images/train1.webp);">
                <div class="text d-flex align-items-end">
                    <div class="text-white p-2 px-3">
                        <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                        <h5 class="text-capitalize">Pemesanan Tiket Kereta</h5>
                    </div>
                </div>
                <div class="content-service">
                    <div class="name text-capitalize">Pemesanan Tiket Kereta</div>
                    <div class="des">Selalu menikmati perjalanan darat tanpa hambatan dengan harga murah !</div>
                    <button><a class="text-dark" href="/kereta"> See More</a></button>
                </div>
            </div>
            <div class="item-service" style="background-image: url(/images/shuttle.webp);">
                <div class="text d-flex align-items-end">
                    <div class="text-white p-2 px-3">
                        <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                        <h5 class="text-capitalize">Pemesanan Tiket Shuttle Bus</h5>
                    </div>
                </div>
                <div class="content-service">
                    <div class="name text-capitalize">Pemesanan Tiket Shuttle Bus<</div>
                    <div class="des">Dengan santai menikmati perjalanan darat ekslusif dengan harga murah !</div>
                    <button><a class="text-dark" href="/shuttle"> See More</a></button>
                </div>
            </div>
        </div>
        <div class="button">
            <button class="prev" ><i ><-</i></button>
            <button class="next"><i >-></i></button>
        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="index-style/materialize.min.js"></script>
<script>
    let next = document.querySelector(".next");
let prev = document.querySelector(".prev");

next.addEventListener("click", function () {
    let items = document.querySelectorAll(".item-service");
    document.querySelector(".slide-service").appendChild(items[0]);
});

prev.addEventListener("click", function () {
    let items = document.querySelectorAll(".item-service");
    document.querySelector(".slide-service").prepend(items[items.length - 1]); // here the length of items = 4
});

</script>
    @endauth
</main>
@endsection