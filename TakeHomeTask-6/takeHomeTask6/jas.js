function masukanData(){
    event.preventDefault();
    var nilai = document.getElementById("nilai").value;
    var kesan = document.getElementById("kesan").value;
  
    document.getElementById("outputNilai").innerHTML = nilai;
    document.getElementById("outputKesan").innerHTML = kesan;
}