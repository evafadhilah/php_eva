<?php

 $nama = "eva";
 $jenis_kelamin = "perempuan";
 $jenis = "makanan";
 $menu = "Ayam Goreng";
 $jumlah = 10;


 if ($jenis == "makanan") {


if ($menu == "Nasi Goreng") {
    $harga = 10000;
    $total = $harga * $jumlah;
}elseif ($menu == "Mie goreng") {
    $harga = 15000;
    $total = $harga * $jumlah;
}elseif ($menu == "Ayam Goreng") {
    $harga = 20000;
    $total = $harga * $jumlah;
 }else {
    echo "tidak ada menu yang di pesan";
 }

}elseif ($jenis == "minuman") {
    
    if ($menu == "Air Mineral") {
        $harga = 5000;
        $total = $harga * $jumlah;
    }elseif ($menu == "Fresh Tea") {
        $harga = 7000;
        $total = $harga * $jumlah;
    }elseif ($menu == "Jus") {
        $harga = 12000;
        $total = $harga * $jumlah;
     }else {
        echo "tidak ada menu yang di pesan";
     } 
}



echo "-----RESTORAN SELALU RAME----- <br>";
echo"nama                : $nama <br>" ;
echo"jenis kelamin       : $jenis_kelamin <br>";
echo"jenis               : $jenis <br>";
echo"menu                : $menu <br>";
echo"harga               : $harga <br>";
echo"jumlah              : $jumlah <br>";
echo"------------------------------------";
echo"<br>";
echo "total : $total";
echo "<br>";
if ($total >= 50000 ) {
    $diskon = $total * 0.20;
    $total_bayar = $total - $diskon;
    echo "diskon 20% : $diskon";
    echo "<br>";
    echo"------------------------------------";
    echo "<br>";
    echo "total bayar : $total_bayar";
}else {
    echo "diskon 20% : - ";
    echo "<br>";
    echo "total bayar : $total";
}
?>