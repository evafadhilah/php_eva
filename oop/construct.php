<?php

//buat class
class kucing{
    

    //method atau function
    
    //kalo constuct itu munculnya di atas
    public function __construct(){
        echo "hallo saya kucing<br>";
    }

    public function makan(){
        echo "kucing suka makan wikhas";
    }
    public function minum(){
        echo "kucing suka minum air";
    }
    

    //kalo decstruct itu munculnya di akhir
    public function __destruct(){
        echo "miaw miaw miaw *ngekkk";
    }
}

//buat objek
$cetak = new kucing();