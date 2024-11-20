<?php

class contoh{

    public $nama = "daffa";

    public function perkenalan(){
        echo "assalamualaikum <br>";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo $cetak->nama;

?>