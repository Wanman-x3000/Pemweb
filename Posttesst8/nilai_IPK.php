<?php
    $nilai= $_POST['nilaiMatkul'];
    $jumlahMatkul = count($nilai);
    $jumlah = 0;
    for ($i = 0; $i < $jumlahMatkul; $i++){
        $jumlah += $nilai[$i];
    }

    $nilaiIPK = ($jumlah / ($jumlahMatkul*100))*4;

    echo "<h1>Hasil Perhitungan IPK : </h1>";
    echo "Total Nilai Mata Kuliah : " . number_format($jumlah, 2) . "<br>";
    echo "Jumlah Mata Kuliah yang Diambil : " . number_format($jumlahMatkul, 2) . "<br>";
    echo "Total Nilai IPK : " . number_format($nilaiIPK, 2) . "<br>";

    if ($nilaiIPK>=2.0){
        echo "Status Kelulusan : LULUS";
    }
    else{
        echo "Status Kelulusan : TIDAK LULUS";
    }
?>