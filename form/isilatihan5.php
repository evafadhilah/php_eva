<?php

echo "<center>";
if (isset($_POST['proses'])) {
    $no =$_POST['no'];
    $nama =$_POST['nama'];
    $up =$_POST['unit'];
    $tglgj =$_POST['gaji']; 
    $gaji =$_POST['jabatan']; 
    $jabatan =$_POST['jabatan'];
    $lk =$_POST['lama_kerja'];
    $status=$_POST['status_kerja'];
    $bpjs=$_POST['bpjs'];
    $pnjmn=$_POST['pinjaman'];
    $tbngn=$_POST['tabungan'];
    $lainnya=$_POST['lainnya'];
    $total_potongan =  $bpjs+$pnjmn+$tbngn+$lainnya;

}

if ($lk >=5) {
    $tunjangan=1000000;
}else {
    $tunjangan = 0;
};

if ($status == "tetap") {
    $bonus=500000;
}else {
    echo"-";
};

if ($jabatan == "Kepala Sekolah") {
    $gaji = 1000000;
}elseif ($jabatan == "Wakasek") {
    $gaji = 7500000;
}elseif ($jabatan == "Guru") {
    $gaji = 5000000;
}elseif ($jabatan == "OB") {
    $gaji = 2500000;
}else {
    echo "Anda Tidak Bekerja";
};

$gaji_kotor= $gaji+$tunjangan+$bonus;
$gaji_bersih = $gaji_kotor-$total_potongan;


echo"<center>";
echo"<br>";
echo"<table>";
echo"STRUK";
echo"<br>";
echo"=====================================";
echo"

<tr>
   <td>No</td>
   <td>:</td></td>
   <td>$no</td>
</tr>
<tr>
   <td>Nama</td>
   <td>:</td></td>
   <td>$nama</td>
</tr>
<tr>
   <td>Unit Pendidikan</td>
   <td>:</td></td>
   <td>$up</td>
</tr>
<tr>
   <td>Tanggal Gaji</td>
   <td>:</td></td>
   <td>$tglgj</td>
</tr>

<tr>
   <td></td>
   <td></td>
   <td></td>
</tr>
<tr>
   <td><h2>Gaji</h2></td>
</tr>

<tr>
   <td>Jabatan</td>
   <td>:</td></td>
   <td>$jabatan</td>
</tr>

<tr>
   <td>Gaji</td>
   <td>:</td></td>
   <td>$gaji</td>
</tr>
 
<tr>
   <td>Lama Kerja</td>
   <td>:</td></td>
   <td>$lk</td>
</tr>

<tr>
   <td>Tunjangan</td>
   <td>:</td></td>
   <td>$tunjangan</td>
</tr>

<tr>
   <td>Status Kerja</td>
   <td>:</td></td>
   <td>$status</td>
</tr>

<tr>
   <td>Bonus</td>
   <td>:</td></td>
   <td>$bonus</td>
</tr>

<tr>
   <td>Gaji Kotor</td>
   <td>:</td></td>
   <td>$gaji_kotor</td>
</tr>

<tr>
   <td></td>
   <td></td>
   <td></td>
</tr>
<tr>
   <td><h2>Potongan</h2></td>
</tr>


<tr>
   <td>BPJS</td>
   <td>:</td></td>
   <td>$bpjs</td>
</tr>
<tr>
   <td>Pinjaman</td>
   <td>:</td></td>
   <td>$pnjmn</td>
</tr>

<tr>
   <td>Tabungan</td>
   <td>:</td></td>
   <td>$tbngn</td>
</tr>
<tr>
   <td>Lainnya</td>
   <td>:</td></td>
   <td>$lainnya</td>
</tr>
<tr>
   <td>Total Potongan</td>
   <td>:</td></td>
   <td>$total_potongan</td>
</tr>

<tr>
<td><h3>Total</h3></td>
</tr>

<tr>
   <td>Gaji Bersih</td>
   <td>:</td></td>
   <td>$gaji_bersih</td>
</tr>
</table>";
echo"</table>";




?>