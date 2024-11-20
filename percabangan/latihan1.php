<?php

$nama = "eva fadhilah";
$kelas = "XI RPL 1";
$B_indonesia = 70;
$B_inggris= 90;
$matematika = 60;
$produktif = 60;
$rata = $B_indonesia + $B_inggris + $matematika + $produktif;
$rata = $rata / 4;

echo"nama        : $nama ";
echo"<br>";
echo"kelas       : $kelas ";
echo"<br>";
echo"B.Indonesia : $B_indonesia ";
echo"<br>";
echo"B.Inggris   : $B_inggris ";
echo"<br>";
echo"matematika  : $matematika ";
echo"<br>";
echo"produktif   : $produktif ";
echo"<br>";
echo"rata rata   : $rata ";
echo"<br>";
echo"<hr>";

if ($rata > 75) {
    echo "anda lulus";
} else {
    echo "anda tidak lulus";
}
?>