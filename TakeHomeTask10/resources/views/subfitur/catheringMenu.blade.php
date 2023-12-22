@extends('layout.app')
@section('content')
<main>
    <h1>Our Cathering Menu</h1>
    <img class="cathering" src="" alt="" id="karosel">
    <br>
    <button onclick="back()">Back</button>
    <button onclick="next()">Next</button>
    <script >
        var i = 0;
    var foto = document.getElementById('karosel');
    foto.src = "img/bakso.jpeg"
    var poto = ["img/bakso.jpeg", "img/pasta.jpeg","img/ratatouile.jpg","img/rendang.jpeg"]
    function next(){
        if (i == 3){
            i = -1;
        }
        i++;
        foto.src = poto[i];
    }
    function back(){
        if ( i == 0){
            i = 4;
        }
        i--;
        foto.src = poto[i];
}
    </script>
</main>
@endsection