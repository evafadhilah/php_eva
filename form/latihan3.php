<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <img src="logo smk.png" alt="" width="20%">
    <form action="" method="post">
        <h1>Form Biodata Siswa</h1>
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="Nama" value=""></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tempat_Lahir" value=""></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="Tanggal_Lahir" value=""></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="Jenis_Kelamin" value="Laki-Laki">Laki-Laki
                <input type="radio" name="Jenis_Kelamin" value="Perempuan">Perempuan
            </td>
            
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="Alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="Agama" id="">
                <option value="Islam">Islam</option>
                <option value="Islam">Kristen</option>
                <option value="Islam">Budha</option>
                
            </select>
            </td>
        </tr>

        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><select name="Pendidikan_Terakhir" id="">
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK">SMK</option>
            </select>
            </td>
        </tr>
        </tr>

        <tr>
            <td>Status</td>
            <td>:</td>
            <td><select name="Status" id="">
                <option value="Programmer">Sudah Menikah</option>
                <option value="Dokter">Belum Menikah</option>
            </select>
            </td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="Hobi" value="Membaca">Membaca
                <input type="checkbox" name="Hobi" value="Menulis">Menulis
                <input type="checkbox" name="Hobi" value="Ngepush">Ngepush
            </td>
        </tr>

        <tr>
            <td>Cita-Cita</td>
            <td>:</td>
            <td><select name="Cita-Cita" id="">
                <option value="Programmer">Programmer</option>
                <option value="Dokter">Dokter</option>
                <option value="Pengusaha">Pengusaha</option>
            </select>
            </td>
        </tr>

        <tr>
            <td>Kata-Kata Bijak</td>
            <td>:</td>
            <td><textarea name="Kata_Kata" id="" cols="30" rows="10"></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="proses"></td>
        </tr>
        </table>
    </form>
</center>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    
    $nama1 =$_POST['Nama'];
    $tml =$_POST['Tempat_Lahir'];
    $tgl =$_POST['Tanggal_Lahir'];
    $jenis_kelamin =$_POST['Jenis_Kelamin'];
    $alamat =$_POST['Alamat'];
    $agama =$_POST['Agama'];
    $pt =$_POST['Pendidikan_Terakhir'];
    $status1 =$_POST['Status'];
    $hobi1 =$_POST['Hobi'];
    $ctct =$_POST['Cita-Cita'];
    $ktkt_bijak =$_POST['Kata_Kata'];

    echo "<center>";
    echo "<br><br>";
    echo "BIODATA DIRI <br>";
    echo"Nama : $nama1 <br>";
    echo"Tempat Lahir : $tml <br>";
    echo"Tanggal Lahir : $tgl<br>";
    echo"Jenis Kelamin : $jenis_kelamin <br>";
    echo"Alamat : $alamat <br>";
    echo"Agama : $agama <br>";
    echo"Pendidikan Terakhir : $pt <br>";
    echo"Status : $status1 <br>";
    echo"Hobi : $hobi1 <br>";
    echo"Cita-Cita : $ctct <br>";
    echo"Kata-Kata Bijak : $ktkt_bijak <br>";
    echo "</center>";
}

?>