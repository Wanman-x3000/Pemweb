@extends('layout.app')
@section('content')
<link rel="stylesheet" href="css/styles.css">
<main>
    <form>
        <table id="banana">
        <tr><td>
        <label >Jumlah Rating:</label>
        <input class="datas" id="nilai" type="number" /><td></tr>
        <tr><td><label >kesan: </label></tr>
        <tr><td><input class="data" type="text" id="kesan"></tr>
        <tr><td><button onclick="masukanData()">Submit</button></td></tr>
        </table>
    </form>
    <br><br><br><br>
    <table class="bungkus2">
        <tr >
            <td>Rating : </td>
            <td>100/10</td>
        </tr>
        <tr>
            <td>Kesan : </td>
            <td>Mantap sangat wo</td>
        </tr>
    </table>
    <br>
    <div id="kotak-komentar"></div>

    <table class="bungkus2">
        <tr >
            <td>Rating : </td>
            <td><div id="outputNilai"></div></td>
        </tr>
        <tr>
            <td>Kesan : </td>
            <td><div id="outputKesan"></div></td>
        </tr>
    </table>
    <script>
        function masukanData(){
    event.preventDefault();
    var nilai = document.getElementById("nilai").value;
    var kesan = document.getElementById("kesan").value;
  
    document.getElementById("outputNilai").innerHTML = nilai;
    document.getElementById("outputKesan").innerHTML = kesan;
}
    </script>
</main>
@endsection