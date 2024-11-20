<?php

$siswa =[
    [
        "Nis" => 1001,
        "Nama" => "Hadda",
        "Kelas" => "11 RPL 3",
        "ekskul" => 
        [
            "nama ekskul" => "Futsal",
            "nama ekskul" => "Karawitan",
            "nama ekskul" => "Hadroh",
        ]
    ],

        [
            "Nis" => 1002,
            "Nama" => "Sandi",
            "Kelas" => "11 RPL 1",
            "Ekskul" => "Futsal"
        ],
    ];

    foreach ($siswa as $data){
        echo "nis : ".$data["Nis"]."<br>";
        echo "nama : ".$data["Nama"]."<br>";
        echo "kelas : ".$data["Kelas"]."<br>";
        echo "ekskul : <ul>";
        foreach ($data ["Ekskul"] as $siswa){
            echo "<li>" .$siswa ."</li>";
        }
        echo "</ul>";
        echo "<hr>";   
    }

?>