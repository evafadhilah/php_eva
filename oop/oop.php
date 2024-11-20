<?php

//buat class
class kucing{
    
    //buat property atau atribut
    var $warna;
    var $jenis;

    //method atau function
    public function makan(){
        echo "kucing suka makan wikhas";
    }
    public function minum(){
        echo "kucing suka minum air";
    }
}

//buat objek
$cetak = new kucing(); //instansiasi

//memaggil method
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

//memanggil property
echo $cetak->warna ="hitam";
echo "<br>";
echo $cetak->jenis = "anggora";


?>