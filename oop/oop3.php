<?php

class bangun_datar{
    public $hasil_segitiga;
    public $hasil_persegi;
    public $hasil_persegi_panjang;
    public $hasil_lingkaran;

    public function segitiga($alas,$tinggi){
      
        echo "<b>Luas Segitiga</b><br><br>";
        echo "Alas: $alas<br>";
        echo "Tinggi : $tinggi<br>";
        $this->hasil_segitiga = 1/2 * $alas * $tinggi;
        echo "hasil : $this->hasil_segitiga<br>";

        }

    public function persegi($sisi){
      
        echo "<b>Luas Persegi</b><br><br>";
        echo "Sisi: $sisi<br>";
        $this->hasil_persegi = $sisi * $sisi;
        echo "hasil : $this->hasil_persegi<br>";
        }
        
    public function persegi_panjang($panjang,$lebar){
      
        echo "<b>Luas Persegi Panjang</b><br><br>";
        echo "Panjang : $panjang<br>";
        echo "Lebar : $lebar<br>";
        $this->hasil_persegi_panjang = $panjang * $lebar;
        echo "hasil : $this->hasil_persegi_panjang<br>";
        }


    public function Lingkaran($jari_jari){
      
        echo "<b>Luas Lingkaran</b><br><br>";
        echo "Jari Jari : $jari_jari<br>";
        $this->hasil_lingkaran = 3.14 * $jari_jari * $jari_jari;
        echo "hasil : $this->hasil_lingkaran";
        }
}

$cetak = new bangun_datar();



echo $cetak->segitiga(2,4);
echo "<hr>";
echo $cetak->persegi(20,24);
echo "<hr>";
echo $cetak->persegi_panjang(26,30);
echo "<hr>";
echo $cetak->lingkaran(16,25);
?>