<?php

class ppdb{

    
    public function data_diri($jurusan,$nama,$jk,$tl,$tgl,$NoSiswa){
      
      echo "<b>Data Diri Calon Pendaftar</b><br><br>";
      echo "Jurusan: $jurusan<br>";
      echo "Nama Lengkap : $nama<br>";
      echo "Jenis Kelamin : $jk<br>";
      echo "Tanggal Lahir : $tgl<br>";
      echo "Tempat Lahir : $tl<br>";
      echo "No Hp Siswa : $NoSiswa<hr>";
      }

    public function alamat_calon($provinsi,$kab,$kecamatan,$desa,$alamat,$kode){
        
        echo "<b>Alamat Calon Pendaftar</b><br><br>";
        echo "Provinsi: $provinsi<br>";
        echo "Kab / Kota : $kab<br>";
        echo "Kecamatan : $kecamatan<br>";
        echo "Desa / Kelurahan: $desa<br>";
        echo "Alamat : $alamat<br>";
        echo "Kode Pos : $kode<hr>";
        }

    public function data($sekolah,$alamat){
            
            echo "<b>Data Asal Sekolah</b><br><br>";
            echo "Nama Asal Sekolah : $sekolah<br>";
            echo "Alamat Asal Sekolah : $alamat<hr>";
            }  
     
    public function data_ortu($nama,$kerja,$no,$alamat){
            
            echo "<b>Data Orang Tua</b><br><br>";
            echo "Nama Lengkap Ayah/Ibu/Wali : $nama<br>";
            echo "Pekerjaan Ayah/Ibu/Wali : $kerja<br>";
            echo "No Hp Yang Bisa Di Hubungi : $no<br>";
            echo "Alamat Lengkap : $alamat<br>";
                }
}

$cetak = new ppdb;

echo $cetak->data_diri("RPL","Eva Fadhilah","Perempuan","05 Agustus 2008","Garut","083843298960");
echo $cetak->Alamat_Calon("Provinsi Jawa Barat","Kab.Bandung","Dayeuh Kolot","Margahayu Tengah","Jl.Sadang","4052");
echo $cetak->data("SMPN 03 MARGAHAYU","Jl.Sadang");
echo $cetak->data_ortu("Ibuku","Hmz apa yahk","085221809377","Jl.Sadang");


?>