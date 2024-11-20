<?php

class bangun_datar{

     public $luas_persegi_panjang;
     public $luas_segitiga;
     public $luas_persegi;
     public $luas_lingkaran;

}

class luas extends bangun_datar{
     
    public function persegi_panjang($panjang,$lebar){
        echo"<b>Menghitung Persegi panjang</b><br><br>";
        echo"Panjang : $panjang<br>";
        echo"Lebar : $lebar <br>";
        $this->luas_persegi_panjang = $panjang * $lebar;
        echo"Hasilnya : $this->luas_persegi_panjang<hr>";
    }
    public function segitiga($alas,$tinggi){
        echo"<b>Menghitung Luas Segitiga</b><br><br>";
        echo"Alas : $alas <br>";
        echo"Tinggi : $tinggi <br>";
        $this->luas_segitiga = 1/2 * $alas * $tinggi;
        echo"Hasilnya : $this->luas_segitiga<hr>";
    }
    public function persegi($sisi){
        echo"<b>Menghitung Luas Persegi</b><br><br>";
        echo"Sisi : $sisi <br>";
        $this->luas_persegi = $sisi * $sisi;
        echo"Hasilnya : $this->luas_persegi<hr>";
    }
    public function lingkaran($jari_jari){
        echo"<b>Menghitung Luas Lingkaran</b><br><br>";
        echo"Jari-Jari : $jari_jari<br>";
        $this->luas_lingkaran = 3.14 * $jari_jari * $jari_jari;
        echo"Hasilnya : $this->luas_lingkaran<hr>";
    }


}

class keliling extends bangun_datar{

    public function persegi_panjang($p,$l){
        echo"<b>Menghitung Keliling Persegi panjang</b><br><br>";
        echo"Panjang : $p<br>";
        echo"Lebar : $l <br>";
        $this->keliling_persegi_panjang = $p + $l + $p + $l;
        echo"Hasilnya : $this->keliling_persegi_panjang<hr>";
    }
    public function segitiga($a,$b,$c){
        echo"<b>Menghitung Keliling Segitiga</b><br><br>";
        echo"Alas : $a <br>";
        echo"Alas : $b <br>";
        echo"Tinggi : $c <br>";
        $this->keliling_segitiga = $a + $b + $c;
        echo"Hasilnya : $this->keliling_segitiga<hr>";
    }
    public function persegi($sisi){
        echo"<b>Menghitung Luas Persegi</b><br><br>";
        echo"Sisi : $sisi <br>";
        $this->keliling_persegi = $sisi * $sisi;
        echo"Hasilnya : $this->keliling_persegi<hr>";
    }
    public function lingkaran($jari_jari){
        echo"<b>Menghitung Luas Lingkaran</b><br><br>";
        echo"Jari-Jari : $jari_jari<br>";
        $this->keliling_lingkaran = 3.14 * $jari_jari * $jari_jari;
        echo"Hasilnya : $this->keliling_lingkaran";
    }

}


    $cetak = new luas();

    echo $cetak->persegi_panjang(10,5);
    echo $cetak->segitiga(20,5);
    echo $cetak->persegi(15,6);
    echo $cetak->lingkaran(10,2);

    $cetak = new keliling();
    echo $cetak->persegi_panjang(10,5);
    echo $cetak->segitiga(11,6,9);

?>