<?php

function biodata($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $hobi){
    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $tempat_lahir <br>";
    echo "Tanggal Lahir : $tanggal_lahir<br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Agama :  $agama <br>";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hobi";
}

biodata("eva","garut","05 agustus 2008","perempuan","islam","jl.sadang","memasak");

echo"<hr>";


function menghitung($angka1, $angka2){
    echo"bilangan ke 1 : $angka1 <br>";
    echo"bilaangan ke 2 : $angka2 <br>";
    $hasil = $angka1 + $angka2;
    echo"hasilnya : $hasil";
}


menghitung(10,20);



?>