<?php

$siswa = [
    [
        "nama" => "Eva Fadhilah",
        "jenis_kelamin" => "Perempuan",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => " Vika Aryani",
        "jenis_Kelamin" => "Perempuan",
        "Kelas" => "XI RPL 2"
    ],
];

foreach ($siswa as $murid) {
    echo "Nama : ".$murid["nama"]."<br>";
    echo "Jenis Kelamin : ".$murid["jenis_kelamin"]."<br>";
    echo "Kelas : ".$murid["kelas"];
    echo "<hr>";

};



?>