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
    },
    {
        "no": "11",
        "judul": "Mawar Berduri",
        "genre": "Drama/Politik",
        "penulis": "Rizky Maulana",
        "penerbit": "Bumi Aksara",
        "tahun_rilis": "2024"
    },
    {
        "no": "12",
        "judul": "Satu Malam di Hutan",
        "genre": "Horor",
        "penulis": "Hendra Setiawan",
        "penerbit": "Kegelapan Buku",
        "tahun_rilis": "2023"
    },
    {
        "no": "13",
        "judul": "Sang Penipu",
        "genre": "Thriller",
        "penulis": "Tia Rahmawati",
        "penerbit": "Urban Story",
        "tahun_rilis": "2025"
    },
    {
        "no": "14",
        "judul": "Jendela ke Masa Lalu",
        "genre": "Fantasi",
        "penulis": "Sandi Harsya",
        "penerbit": "Pelangi Cerita",
        "tahun_rilis": "2022"
    },
    {
        "no": "15",
        "judul": "Senyuman di Ujung Malam",
        "genre": "Romantis",
        "penulis": "Fani Lestari",
        "penerbit": "Cinta Abadi",
        "tahun_rilis": "2025"
    },
    {
        "no": "16",
        "judul": "Misteri Lagu Terakhir",
        "genre": "Thriller/Musik",
        "penulis": "Dwi Prasetyo",
        "penerbit": "Melodi Buku",
        "tahun_rilis": "2024"
    },
    {
        "no": "17",
        "judul": "Kota yang Hilang",
        "genre": "Petualangan",
        "penulis": "Dita Anggara",
        "penerbit": "Eksplorasi",
        "tahun_rilis": "2023"
    },
    {
        "no": "18",
        "judul": "Cinta di Antara Bintang",
        "genre": "Sci-Fi/Romantis",
        "penulis": "Joni Pramono",
        "penerbit": "Bintang Sastra",
        "tahun_rilis": "2024"
    },
    {
        "no": "19",
        "judul": "Musim Gugur yang Berbeda",
        "genre": "Fantasi",
        "penulis": "Adi Prabowo",
        "penerbit": "Mosaik Cerita",
        "tahun_rilis": "2024"
    },
    {
        "no": "20",
        "judul": "Sebuah Harapan di Ujung Dunia",
        "genre": "Sci-Fi/Dystopia",
        "penulis": "Rendi Putra",
        "penerbit": "Nova Pustaka",
        "tahun_rilis": "2023"
    }
]';

$list = json_decode($dataJSON);
echo"
<center>
        <h2>Kumpulan Novel Terbaru</h>
        <table border=1 width=70% cellspacing=0>
            <tr>
                <td><b>No</b></td>
                <td><b>Judul</b></td>
                <td><b>Genre</b></td>
                <td><b>Penulis</b></td>
                <td><b>Penerbit</b></td>
                <td><b>Tahun</b></td>";

?>


