<?php

class uang_gaji{

    public $gaji;
    public $tunjangan;
    public $potongan;
    public $total;
    public $gaji_bersih;


    public function gaji_pokok($nama,$jabatan){
       if ($jabatan=="Direktur") {
        $this->gaji = 10000000;
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        echo "Gaji Pokok : $this->gaji <br>";
       }elseif ($jabatan=="Manager") {
        $this->gaji = 7500000;
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        echo "Gaji Pokok : $this->gaji <br>";
       }elseif ($jabatan=="Karyawan") {
       $this->gaji = 5000000;
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        echo "Gaji Pokok : $this->gaji <br>";
       }elseif ($jabatan=="OB") {
        $this->gaji = 2500000;
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        echo "Gaji Pokok : $this->gaji <br>";
       }
    }

    public function tunjangan($pendidikan){
       if ($pendidikan=="S1") {
        $this->tunjangan = 1000000;
        echo "Pendidikan : $pendidikan <br>";
        echo "Tunjangan : $this->tunjangan <br>";
       }elseif ($pendidikan=="SMA") {
        $this->tunjangan = 750000;
        echo "Pendidikan : $pendidikan <br>";
        echo "Tunjangan : $this->tunjangan <br>";
       }elseif ($pendidikan=="SMP") {
        $this->tunjangan = 500000;
        echo "Pendidikan : $pendidikan <br>";
        echo "Tunjangan : $this->tunjangan <br>";
    }elseif ($pendidikan=="SD") {
        $this->tunjangan = 250000;
        echo "Pendidikan : $pendidikan <br>";
        echo "Tunjangan : $this->tunjangan <br>";
      }
    }

    public function potongan($tabungan,$pinjaman){
       echo "Tabungan : $tabungan <br>";
       echo "Pinjaman : $pinjaman <br>";
       $this->potongan = $tabungan + $pinjaman;
       echo "Total Potongan : $this->potongan <br>";

    }

    public function total(){
           $this->gajih_bersih = $this->gaji + $this->tunjangan - $this->potongan;
           echo "Total Gaji Bersih : $this->gajih_bersih";
    }
}

$cetak = new uang_gaji();

echo "<h3>Gaji Pokok</h3>";
echo $cetak->gaji_pokok("Eva","Direktur");
echo "<hr>";
echo "<h3>Tunjangan Pendidikan</h3>";
echo $cetak->tunjangan("SMA");
echo "<hr>";
echo "<h3>Potongan</h3>";
echo $cetak->potongan(200000,50000);
echo "<hr>";
echo "<h3>Gaji Bersih</h3>";
echo $cetak->total();

?>