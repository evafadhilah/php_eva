<?php

function segitiga($alas,$tinggi){
    echo"<b>Menghitung Luas Segitiga</b><br><br>";
    echo"Alas : $alas <br>";
    echo"Tinggi : $tinggi <br>";
    $hasil = 1/2 * $alas * $tinggi;
    echo"hasilnya : $hasil";
}


function persegi($sisi){
    echo"<b>Menghitung Luas Persegi</b><br><br>";
    echo"Sisi : $sisi <br>";
    $hasil = $sisi * $sisi;
    echo"hasilnya : $hasil";
}

function persegi_panjang($panjang,$lebar){
    echo"<b>Menghitung Persegi panjang</b><br><br>";
    echo"Panjang : $panjang<br>";
    echo"Lebar : $lebar <br>";
    $hasil = $panjang * $lebar;
    echo"hasilnya : $hasil";
}

function lingkaran($jari_jari){
    echo"<b>Menghitung Luas Lingkaran</b><br><br>";
    echo"Jari-Jari : $jari_jari<br>";
    $hasil = 3.14 * $jari_jari * $jari_jari;
    echo"hasilnya : $hasil";
}
    

segitiga(10,10);
echo "<hr>";
persegi(20,30);
echo "<hr>";
persegi_panjang(10,3);
echo "<hr>";
lingkaran(5);


?>