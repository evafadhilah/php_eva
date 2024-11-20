<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <td><h2>Rapot Siswa</h2></td>
    <form action="isi11.php" method="post">
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
                    <option value="RPL">rekayasa perangkat lunak</option>
                    <option value="TKR">teknik kendaraan ringan otomotif</option>
                    <option value="TBSM">teknik bisnis sepeda motor</option>
                    </select>
             </tr>
            <tr>
           <td><h2>Nilai Matematika</h2></td>
           </tr>
           <tr>
            <td>NILAI HARIAN</td>
            <td>:</td>
            <td><input type="number" name="harianmtk"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI TUGAS</td>
            <td>:</td>
            <td><input type="number" name="tugasmtk"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UTS</td>
            <td>:</td>
            <td><input type="number" name="utsmtk"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UAS</td>
            <td>:</td>
            <td><input type="number" name="uasmtk"></td>
            <br>
           </tr>

           <tr>
            <td><h2>Nilai Bahasa Indonesia</h2></td>
           </tr>
           <tr>
            <td>NILAI HARIAN</td>
            <td>:</td>
            <td><input type="number" name="harianindonesia"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI TUGAS</td>
            <td>:</td>
            <td><input type="number" name="tugasindonesia"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UTS</td>
            <td>:</td>
            <td><input type="number" name="utsindonesia"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UAS</td>
            <td>:</td>
            <td><input type="number" name="uasindonesia"></td>
            <br>
           </tr>

           <tr>
            <td><h2>Nilai Bahasa Inggris</h2></td>
           </tr>
           <tr>
            <td>NILAI HARIAN</td>
            <td>:</td>
            <td><input type="number" name="harianinggris"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI TUGAS</td>
            <td>:</td>
            <td><input type="number" name="tugasinggris"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UTS</td>
            <td>:</td>
            <td><input type="number" name="utsinggris"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UAS</td>
            <td>:</td>
            <td><input type="number" name="uasinggris"></td>
            <br>
           </tr>

           <tr>
            <td><h2>Nilai Produktif</h2></td>
           </tr>
           <tr>
            <td>NILAI HARIAN</td>
            <td>:</td>
            <td><input type="number" name="harianproduktif"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI TUGAS</td>
            <td>:</td>
            <td><input type="number" name="tugasproduktif"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UTS</td>
            <td>:</td>
            <td><input type="number" name="utsproduktif"></td>
            <br>
           </tr>

           <tr>
            <td>NILAI UAS</td>
            <td>:</td>
            <td><input type="number" name="uasproduktif"></td>
            <br>
           </tr>
           <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
        </table>
        </form>
    </center>
</body>
</html>