var counter = 2;
document.getElementById('tambahInput').addEventListener('click', function (e){
    e.preventDefault();
    var newLabel = document.createElement('label');
    var newInput = document.createElement('input');

    newLabel.setAttribute('for', 'nilaiMatkul');
    newLabel.textContent = 'Nilai Mata Kuliah' + (counter) + ' :';
    
    newInput.type = 'text';
    newInput.name = 'nilaiMatkul[]';
    newInput.placeholder = 'Nilai Mata Kuliah' + (counter - 1);

    document.getElementById('kolomInput').appendChild(newLabel);
    document.getElementById('kolomInput').appendChild(newInput);
    document.getElementById('kolomInput').appendChild(document.createElement('br'));

    counter++;
});