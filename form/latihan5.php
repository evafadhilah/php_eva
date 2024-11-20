<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <img src="yayasan.jpg" alt="" width="15%">
        <form action="isilatihan5.php" method="post">
            <h3>PENGGAJIHAN </h3>
            <h3>GURU/KARYAWAN YAYASAN ASSALAAM BANDUNG </h3>
            <br>
            <h3>Data Penggajihan</h3>
        <table>

            <tr>
                <td>No</td>
            </tr>
            <tr>
                <td><input type="text" name="no" placholder=""></td>
            </tr> 

            <tr>
                <td>Nama</td>
            </tr>
            <tr>
                <td><input type="text" name="nama"></td>
            </tr> 

            <tr>
                <td>Unit Pendidikan</td></td>
            </tr>
            <tr>
                <td><select name="unit" id="">
                    <OPtion value="">Pillih Unit Pendidikan</OPtion>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMA">SMA</option>
                    <OPtion value="SMK">SMK</OPtion>
                    </select>
                    </td>
            </tr> 
            <tr>
            <td>Tanggal Gaji</td>
            </tr>
            <tr>
                <td><input type="date" name="gaji"></td>
            </tr>

            <tr>

            <tr>
                <td>Jabatan</td>
            </tr>
            <tr>
                <td><select name="jabatan" id="">
                    <OPtion value="">Pillih Jabatan</OPtion>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakasek">Wakasek</option>
                    <option value="Guru">Guru</option></option>
                    <OPtion value="OB">OB</OPtion>
                    </select>
                    </td>
            </tr>

            <tr>
            <td>Lama Kerja</td>
            </tr>
            <tr>
                <td><input type="text" name="lama_kerja" id=""></td>
            </tr>

            <tr>
            <td>Status Kerja</td>
            </tr>
            <tr>
                <td><select name="status_kerja" id="">
                    <option value="pilih status">Pilih Status</option>
                    <option value="tetap">Tetap</option>
                    <option value="kontrak">Kontrak</option>
                </select></td>
            </tr>

            <tr>
                <td>BPJS</td>
            </tr>
            <tr>
                <td><input type="text" name="bpjs"></td>
            </tr>

            <tr>
                <td>pinjaman</td>
            </tr>
            <tr>
                <td><input type="text" name="pinjaman"></td>
            </tr>

            <tr>
                <td>Tabungan</td>
            </tr>
            <tr>
                <td><input type="text" name="tabungan"></td>
            </tr>
            
            <tr>
                <td>Lainnya</td>
            </tr>
            <tr>
                <td><input type="text" name="lainnya"></td>
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