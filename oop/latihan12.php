<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  
        <form action="isi12.php" method="post">
        <div class="row mt-3">  
            <div class="col">
                <div class="card d-block mx-auto" style="width: 70rem; ">
                    <div class="card-header fs-3" align="left">
                        Data Diri calon Pendaftar
                    </div>
                <div class="card-body">
            <div class="row">
        <div class="col" align="left">
        <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan </label>
          <select name="jurusan" id="" class="selection form-control">
            <option value="-">Pilih Jurusan</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
          </select>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap </label>
        <input type="text" class="form-control" id="nama" name="namacalon" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Jenis Kelamin </label>
        <div>
          <input type="radio" id="laki-laki" name="jk" value="Laki-laki" required>
          <label for="laki-laki">Laki - Laki</label>
          <input type="radio" id="perempuan" name="jk" value="Perempuan">
          <label for="perempuan">Perempuan</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="tempatLahir" class="form-label">Tempat Lahir </label>
        <input type="text" class="form-control" id="tempatLahir" name="tmptlahir" required>
      </div>
      <div class="mb-3">
        <label for="tanggalLahir" class="form-label">Tanggal Lahir </label>
        <input type="date" class="form-control" id="tanggalLahir" name="tgllahir" required>
      </div>
      <div class="mb-3">
        <label for="noHp" class="form-label">Nomor HP siswa yang bisa dihubungi </label>
        <input type="tel" class="form-control" id="noHp" name="nocalon" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      </div>
      </div>
      </div>
      </div>

            <div class="row mt-5">  
            <div class="col">
                <div class="card d-block mx-auto" style="width: 70rem; ">
                    <div class="card-header fs-3" align="left">
                    Alamat Calon Pendaftar
                    </div>
                <div class="card-body">
            <div class="row">
        <div class="col" align="left">
        <div class="mb-3">
        <label for="provinsi" class="form-label">Provinsi </label>
        <select name="provinsi" name="provinsi" id="" class="selection form-control">
          <option value="-">Pilih Provinsi</option>
          <option value="Aceh">Aceh</option>
          <option value="Sumatera Utara">Sumatera Utara</option>
          <option value="Sumatera Barat">Sumatera Barat</option>
          <option value="Riau">Riau</option>
          <option value="Kepulauan Riau">Kepulauan Riau</option>
          <option value="Jawa Barat">Jawa Barat</option>
          <option value="Jawa Tengah">Jawa Tengah</option>
          <option value="Jawa Timur">Jawa Timur</option>
          <option value="Bali">Bali</option>
          <option value="Papua">Papua</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="kabupaten_kota" class="form-label">Kabupaten / kota </label>
          <select name="kabupaten_kota" id="" class="selection form-control">
            <option value="-">Pilih Kota</option>
            <option value="Bandung">Bandung</option>
            <option value="Bandung Barat">Bandung Barat</option>
            <option value="Bekasi">Bekasi</option>
            <option value="Bogor">Bogor</option>
            <option value="Ciamis">Ciamis</option>
            <option value="Cianjur">Cianjur</option>
            <option value="Cimahi">Cimahi</option>
            <option value="Cirebon">Cirebon</option>
            <option value="Garut">Garut</option>
            <option value="Indramayu">Indramayu</option>
          </select>
      </div>
      <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan </label>
          <select name="kecamatan" id="" class="selection form-control">
            <option value="-">Pilih Kecamatan</option>
            <option value="Andir">Andir</option>
            <option value="Antapani">Antapani</option>
            <option value="Arcamanik">Arcamanik</option>
            <option value="Astanaanyar">Astanaanyar</option>
            <option value="Babakan Ciparay">Babakan Ciparay</option>
            <option value="Bandung Kidul">Bandung Kidul</option>
            <option value="Bandung Kulon">Bandung Kulon</option>
            <option value="Bandung Wetan">Bandung Wetan</option>
            <option value="Batununggal">Batununggal</option>
            <option value="Bojongloa Kaler">Bojongloa Kaler</option>
          </select>
      </div>
      <div class="mb-3">
        <label for="desa_kelurahan" class="form-label">Desa / Kelurahan</label>
        <select name="desa" id="" class="selection form-control">
          <option value="-">Pilih desa / kelurahan</option>
          <option value="Ciburial">Ciburial</option>
          <option value="Cileunyi">Cileunyi</option>
          <option value="Ciparay">Ciparay</option>
          <option value="Margaluyu">Margaluyu</option>
          <option value="Mekarsari">Mekarsari</option>
          <option value="Cangkuang">Cangkuang</option>
          <option value="Pangalengan">Pangalengan</option>
          <option value="Rancamanyar">Rancamanyar</option>
          <option value="Sukamaju">Sukamaju</option>
          <option value="Sukasari">Sukasari</option>
        </select>
      </div>
      <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea name="alamatcalon" id="" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <label for="pos" class="form-label">kode pos</label>
        <input type="pos" name="kodepos" class="form-control" id="email">
      </div>
</div>
</div>
</div>
</div>

<div class="row mt-5">  
            <div class="col">
                <div class="card d-block mx-auto" style="width: 70rem; ">
                    <div class="card-header fs-3" align="left">
                        Data Asal Sekolah
                    </div>
                <div class="card-body">
            <div class="row">
        <div class="col" align="left">
      <div class="mb-3">
      <label for="nama_sekolah" class="form-label">Nama Asal Sekolah</label>
      <input type="text" name="asalsekolah" class="form-control" id="nama" required>
      </div>
      <div class="mb-3">
      <label for="alamat_sekolah" class="form-label">Alamat Sekolah</label>
      <textarea name="alamat_sekolah" id="" class="form-control"></textarea>
      </div>
      </div>
      </div>
      </div>
      </div>

      <div class="row mt-5">  
            <div class="col">
                <div class="card d-block mx-auto" style="width: 70rem; ">
                    <div class="card-header fs-3" align="left">
                        Data Orang Tua
                    </div>
                <div class="card-body">
      <div class="mb-3 d-flex">
      <div class="me-2">
      <label for="nama_ortu" class="form-label">Nama Lengkap Ayah / Ibu / Wali</label>
</div>
<div class="col" align="left">
  <div class="row mb-1">
    <div class="col-2">
      <select class="form-select" aria-label="Default select example" name="ortu">
        <option value="Ayah">Ayah</option>
        <option value="Ibu">Ibu</option>
        <option value="Wali">Wali</option>
      </select>
    </div>
    <div class="col">
     <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap" name="namalengkaportu" required>   
    </div>
   </div>
    </div>
    </div>
      <div class="mb-3">
      <label for="nama" class="form-label">Pekerjaan Ayah / Ibu / Wali</label>
      <input type="text" name="pekerjaan" class="form-control" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">No HP yang bisa di hubungi</label>
        <input type="text" name="noortu" class="form-control" id="nama" required>
      </div>
      <div class="mb-3">
      <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
      <textarea name="alamat_lengkap" id="" class="form-control"></textarea>
      </div>
      <div class="d-flex justify-content">
        <button type="submit" class="btn btn-primary" name="simpan">Simpan & Daftar</button>
      </div>
      </div>
      </div>
      </div>
      </div>
        </form>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>