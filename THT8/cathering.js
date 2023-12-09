var i = 0;
var foto = document.getElementById('karosel');
foto.src = "bakso.jpeg"
var poto = ["bakso.jpeg", "pasta.jpeg","ratatouile.jpg","rendang.jpeg"]
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