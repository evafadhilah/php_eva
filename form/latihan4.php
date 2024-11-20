<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h1>Nilai Ujian Nasional</h1>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>

                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="">
                    <option value="RPL">RPL</option>
                    <option value="TKR">TKRO</option>
                    <option value="TBSM">TBSM</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td><h3>Nilai Ujian</h3></td>
                </tr>

                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="bhs_indonesia"></td>
                </tr>

                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="bhs_inggris"></td>
                </tr>

                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="matematika"></td>
                </tr>

                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif"></td>
                </tr>

                <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="simpan"></td>
                </tr>

            </table>
        </form>
    </center>
</body>
</html>

<?php
echo "<center>";
if (isset($_POST['proses'])) {
    $nama =$_POST['nama'];
    $kls =$_POST['kelas'];
    $jrsn =$_POST['jurusan'];
    $indonesia =$_POST['bhs_indonesia'];
    $inggrs =$_POST['bhs_inggris'];
    $mtk =$_POST['matematika'];
    $produktif =$_POST['produktif'];

    $rata_rata = $indonesia + $inggrs + $mtk + $produktif;
    $rata_rata = $rata_rata /4;

}

echo"<center>";
echo"<br>";
echo"<table>";
echo"
<tr>
   <td>Nama</td>
   <td>:</td></td>
   <td>$nama</td>
</tr>
<tr>
   <td>Kelas</td>
   <td>:</td></td>
   <td>$kls</td>
</tr>
<tr>
   <td>Jurusan</td>
   <td>:</td></td>
   <td>$jrsn</td>
</tr>
<tr>
   <td>Nilai B.Indonesia</td>
   <td>:</td></td>
   <td>$indonesia</td>
</tr>
<tr>
   <td>Nilai B.Inggris</td>
   <td>:</td></td>
   <td>$inggrs</td>
</tr>
<tr>
   <td>Matematika</td>
   <td>:</td></td>
   <td>$mtk</td>
</tr>
<tr>
   <td>Pruduktif</td>
   <td>:</td></td>
   <td>$produktif</td>
</tr>
</table>";

echo"</table>";

if ($rata_rata >75 ) {
    
    echo "TUNTAS!";

}else {
    echo "BELUM TUNTAS!!";
}

echo "</center>";
echo "<br>";
?>

