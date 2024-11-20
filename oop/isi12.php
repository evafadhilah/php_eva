<?php
if (isset($_POST['simpan'])) {
    $jurusan = $_POST['jurusan'];
    $namacalon = $_POST['namacalon'];
    $jk = $_POST['jk'];
    $tmptlahir = $_POST['tmptlahir'];
    $tgllahir = $_POST['tgllahir'];
    $nocalon = $_POST['nocalon'];
    $email = $_POST['email'];
    $provinsi = $_POST['provinsi'];
    $kokab = $_POST['kabupaten_kota'];
    $kec = $_POST['kecamatan'];
    $delur = $_POST['desa'];
    $alamatcalon = $_POST['alamatcalon'];
    $kodepos = $_POST['kodepos'];
    $namaasalsek = $_POST['asalsekolah'];
    $alamatasalsek = $_POST['alamat_sekolah'];
    $ortu = $_POST['ortu'];
    $namalengkaportu = $_POST['namalengkaportu'];
    $pekerjaanortu = $_POST['pekerjaan'];
    $noortu = $_POST['noortu'];
    $alamatortu = $_POST['alamat_lengkap'];

    

    class ppdb{

        public function data_diri($jurusan2,$nama,$jk2,$tmpt,$tgl,$no,$email2){
      
          echo "Jurusan : ".$jurusan2."<br>";
          echo "Nama Lengkap : ".$nama. "<br>";
          echo "Jenis Kelamin : ".$jk2. "<br>";
          echo "Tempat Lahir : ".$tmpt. "<br>";
          echo "Tanggal Lahir : ".$tgl. "<br>";
          echo "Nomor HP : ".$no. "<br>";
          echo "Email : ".$email2. "<br>";
      
      
        }
      
        public function alamat($prov,$kab,$kecamatan,$desa,$alamat,$kode){
      
          echo "Provinsi : ".$prov. "<br>";
          echo "Kab / Kota : ".$kab. "<br>";
          echo "Kecamatan : ".$kecamatan. "<br>";
          echo "Desa / Kelurahan : ".$desa. "<br>";
          echo "Alamat : ".$alamat. "<br>";
          echo "Kode Pos : ".$kode. "<br>";
        }
      
        public function asal_sekolah($asalsek,$alamatasal){
      
          echo "Nama Asal Sekolah : ".$asalsek. "<br>";
          echo "Alamat Asal Sekolah : ".$alamatasal."<br>";
        }
        
        public function data_ortu($nama,$pekerjaan,$nohp,$alamatot){
      
          echo "Nama Lengkap Ayah / Ibu / Wali : ".$nama. "<br>";
          echo "Pekerjaan Ayah / Ibu / Wali : ".$pekerjaan."<br>";
          echo "Nomor HP Orang Tua : ".$nohp. "<br>";
          echo "Alamat Lengkap : ".$alamatot. "<br>";
        }
      
      }
      $cetak = new ppdb();
    
      echo "Data Diri Calon Pendaftar<br>";
      $cetak->data_diri($jurusan,$namacalon,$jk,$tmptlahir,$tgllahir,$nocalon,$email);
      echo "<br><br>";
      echo "Alamat Calon Pendaftar<br>";
      $cetak->alamat($provinsi,$kokab,$kec,$delur,$alamatcalon,$kodepos);
      echo "<br><br>";
      echo "Data Asal Sekolah<br>";
      $cetak->asal_sekolah($namaasalsek,$alamatasalsek);
      echo "<br><br>";
      echo "Data Orang Tua<br>";
      $cetak->data_ortu($namalengkaportu,$pekerjaanortu,$noortu,$alamatortu);
      
    }

      ?>

