<?php

//ini classnya
class manusia{

    //masukan propertynya
    var $nama;
    var $kelas;
    var $warna_kulit;

    
    
    //isi methodnya
    function tampilkan_nama(){
        return "Nama saya eva <br>";
    }

    function tampilkan_kelas(){
        return "Saya kelas 11 rpl 1 <br>";
    }
    
    function warna_kulit(){
        return "Warna kulit saya hitam <br>";
    }
    
}

//instansiasi(proses sebelum trjdinya objek) class manusia
$manusia = new manusia();
 
//memanggil method tampilkan nama dari class manusia
echo $manusia->tampilkan_nama();
echo $manusia->tampilkan_kelas();
echo $manusia->warna_kulit();

?>