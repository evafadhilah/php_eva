<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi Baiq",
        "Tanggal_Liris" => "20 November 2024",
        "Penerbit" => "Airlangga"
    ],
    [
        "judul" => "Layang-Layang Putus",
        "penulis" => "Mommy ASF",
        "Tanggal_Liris" => "21 November 2022",
        "Penerbit" => "RDM Publisher"
    ],
    [
        "judul" => "Laut Bercerita",
        "penulis" => "Endah Sulwesi",
        "Tanggal_Liris" => "29 Agustus 2022",
        "Penerbit" => "Widi Widiyanto"
    ],
    [
        "judul" => "Pulang",
        "penulis" => "Leila S. Chudori",
        "Tanggal_Liris" => "2012",
        "Penerbit" => "Grasindo"
    ],
    [
        "judul" => "Bumi Manusia",
        "penulis" => "Pramoedya Ananta Toer",
        "Tanggal_Liris" => "1980",
        "Penerbit" => "Lentera"
    ],
];

foreach ($novel as $data) {
    echo "judul : ".$data["judul"]."<br>";
    echo "penulis : ".$data["penulis"]."<br>";
    echo "tanggal liris : ".$data["Tanggal_Liris"]."<br>";
    echo "penerbit : ".$data["Penerbit"];
    echo "<hr>";
}
?>