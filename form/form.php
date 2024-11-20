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
        <h1>Biodata Siswa</h1>
        <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="Nama_Lengkap""></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="Kelas"></td>
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
    
    $nama_lengkap2 =$_POST['Nama_Lengkap'];
    $kelas2 =$_POST['Kelas'];

    echo"Nama Lengkap : $nama_lengkap2 <br>";
    echo"Kelas : $kelas2";
}

?>