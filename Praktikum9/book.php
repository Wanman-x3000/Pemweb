<?php
$books = array();

class daftarBuku{
    public $tahun;
    public $judul;
    public $pengarang;
    public function __construct($judul, $pengarang, $tahun){
        $this->tahun = $tahun;
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }
    public function getTahun(){
        return $this->tahun;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function getPengarang(){
        return $this->pengarang;
    }
}
$books = [  new daftarBuku(2023, "Slapat Slepet", "Ari A.S"),
            new daftarBuku(2003, "Brojol", "Ari A.S"),
            new daftarBuku(2012, "Buku Tatang Sutarma", "Sule"),
            new daftarBuku(2021, "Cara Ngepet", "Irsyad Zahrandi"),];

echo "<form>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Tahun Terbit</th>";
echo "<th>Pengarang</th>";
echo "<th>Judul</th>";
echo "</tr>";            
foreach ($books as $buku) {
    echo "<tr>";
    echo "<td>" . $buku->getJudul() . "</td>";
    echo "<td>" . $buku->getTahun() . "</td>";
    echo "<td>" . $buku->getPengarang() . "</td>";
    echo "</tr>";
}
echo "</table>";
echo"<div><a href='pinjam.php'>Pinjam Semua Buku</a></div";
echo "</form>";
?>