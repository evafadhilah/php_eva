<?php

$novel = '[ 
    {
        "no": "1",
        "judul": "Misteri di Balik Cermin",
        "genre": "Fantasi",
        "penulis": "Rina Aulia",
        "penerbit": "Pustaka Muda",
        "tahun_rilis": "2023"
    },
    {
        "no": "2",
        "judul": "Jejak Kaki di Pasir",
        "genre": "Petualangan",
        "penulis": "Budi Santoso",
        "penerbit": "Budi Santoso",
        "tahun_rilis": "2024"
    },
    {
        "no": "3",
        "judul": "Sisi Gelap Bulan",
        "genre": "Sci-Fi",
        "penulis": "Andi Prasetyo",
        "penerbit": "Karya Selaras",
        "tahun_rilis": "2025"
    },
    {
        "no": "4",
        "judul": "Kisah Penjaga Waktu",
        "genre": "Fantasi/Sci-Fi",
        "penulis": "Liana Sari",
        "penerbit": "Pelangi Pustaka",
        "tahun_rilis": "2022"
    },
    {
        "no": "5",
        "judul": "Cinta dalam Gelap",
        "genre": "Romantis",
        "penulis": "Siti Nurhaliza",
        "penerbit": "Cinta Kita",
        "tahun_rilis": "2024"
    },
    {
        "no": "6",
        "judul": "Harta Karun di Dalam Hati",
        "genre": "Misteri",
        "penulis": "Farhan Rizky",
        "penerbit": "Karya Indah",
        "tahun_rilis": "2023"
    },
    {
        "no": "7",
        "judul": "Di Ujung Tangan",
        "genre": "Sci-Fi",
        "penulis": "Maya Pramesti",
        "penerbit": "Inovasi Pustaka",
        "tahun_rilis": "2025"
    },
    {
        "no": "8",
        "judul": "Lagu Tanpa Suara",
        "genre": "Drama",
        "penulis": "Iwan Setiawan",
        "penerbit": "Mutiara Hati",
        "tahun_rilis": "2024"
    },
    {
        "no": "9",
        "judul": "Rahasia di Balik Pagar",
        "genre": "Thriller",
        "penulis": "Aulia Rahman",
        "penerbit": "Fiksi Pro",
        "tahun_rilis": "2023"
    },
    {
        "no": "10",
        "judul": "Penantian di Stasiun",
        "genre": "Romantis",
        "penulis": "Devi Anggraini",
        "penerbit": "Pustaka Cerita",
        "tahun_rilis": "2022"
    }
]';  // Ini adalah string JSON

// Decode JSON menjadi array of objek
$list = json_decode($novel); // Menggunakan $novel, bukan $dataJSON

echo "
<center>
    <h2>Kumpulan Novel Terbaru</h2>
    <table border='1' width='70%' cellspacing='0'>
        <tr>
            <td><b>No</b></td>
            <td><b>Judul</b></td>
            <td><b>Genre</b></td>
            <td><b>Penulis</b></td>
            <td><b>Penerbit</b></td>
            <td><b>Tahun</b></td>
        </tr>";


if ($list) {
    foreach ($list as $novel) {
        echo "
        <tr>
            <td>{$novel->no}</td>
            <td>{$novel->judul}</td>
            <td>{$novel->genre}</td>
            <td>{$novel->penulis}</td>
            <td>{$novel->penerbit}</td>
            <td>{$novel->tahun_rilis}</td>
        </tr>";
    }
} ;

echo "</table>
</center>";
?>
