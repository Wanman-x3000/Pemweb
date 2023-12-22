
@extends('layout.app')
@section('content')
<main>
    <?php
$nama = $_POST['label-nama'];
$tanggal = $_POST['label-tanggal'];

echo "Pesanan anda a.n tn/ny ".$nama." pada tanggal ".$tanggal;
echo "<h1>Berhasil Diterima !!</h1>";

?>
</main>
@endsection