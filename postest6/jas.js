function masukanData() {
    event.preventDefault();
    var dataMakanan = document.getElementById("makanan");
    var selectedOption = dataMakanan.options[dataMakanan.selectedIndex];
    var hargaMakanan = parseFloat(selectedOption.value); // Get the price from the selected option
    var namaMakanan = selectedOption.text;
    var dataJumlah = parseInt(document.getElementById("pesanan").value);
    var dataVoucher = document.getElementById("voucher").value;
    var total = hargaMakanan * dataJumlah; // Calculate the total based on the selected option's price
    var setelahDiskon = total;
    var diskon = 0.2;

    if (dataVoucher == "AriRupawan01") {
        setelahDiskon = total * (1 - diskon);
    }
    
    document.getElementById("outputMakan").innerHTML = namaMakanan;
    document.getElementById("outputPesanan").innerHTML = dataJumlah;
    document.getElementById("outputHarga").innerHTML = total;
    document.getElementById("outputDiskon").innerHTML = setelahDiskon;
}