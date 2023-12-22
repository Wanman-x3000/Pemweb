@extends('layout.app')
@section('content')
<main class="home py-5 px-4">
    <div class="container">
        <div  class="grid-1" >
            <h1>Resevarsi Restoran</h1>
            <p>Selamat datang di resevarsi restoran Satriyo</p>
        </div>
        <div class="grid-3"><img src="img/restorant2.jpg" /></div>
        <form action="/subfitur/konfirmasi" method="post">
            <div class="grid-2">
                <h2>silahkan isi data dibawah ini :</h2>
                <label for="label-nama">Nama :</label>
                <input name="label-nama" class="data" placeholder=" e.g Ari Ganteng" id="nama-pemesan">
                <br>
                <label for="label-email">Email : </label>
                <input name="label-email" class="data" type="email" placeholder=" e.g ariaprilianto@gmail.com" id="email-pemesan">
                <br>
                <label for="label-nim">Nomor Telepon :</label>
                <input name="label-nim" class="data" type="number" placeholder=" e.g +62 89xxxxxxx" id="nomor-pemesan">
                <br>
                <label for="label-tanggal">Tanggal Pesan :</label>
                <input name="label-tanggal" class="data" type="datetime-local" id="tanggal-resevarsi">
                <br>
                <label for="label-banyakOrang">Jumlah Orang yang akan hadir :</label>
                <input name="label-banyakOrang" class="data" type="number" placeholder=" e.g 10" id="jumlah-orang">
            </div >
                <br>
            <div class="grid-4">
               <input type="submit" value="Submit" />
            </div>
        </form>
    </div>
</main>

@endsection