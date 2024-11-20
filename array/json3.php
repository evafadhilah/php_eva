<?php

//data json
$dataJSON= '[
        {
          "nama" : "Vika Aryani",
          "alamat" : "Jawa"
        },
        {
            "nama" : "Isma Tiara Jalianti",
            "alamat" : "Bandung"
          }
]';

//dikonversikan ke json
$list = json_decode($dataJSON);

//tampilkan datanya
foreach ($list as $mahasiswa) {
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Alamat : {$mahasiswa->alamat} <br>";
    echo "<hr>";
}
?>