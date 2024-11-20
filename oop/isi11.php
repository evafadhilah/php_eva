<?php
if (isset($_POST['hitung'])) {
    
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Retrieve input values for each subject
    $harian1 = $_POST['harianmtk'];
    $tugas1 = $_POST['tugasmtk'];
    $uts1 = $_POST['utsmtk'];
    $uas1 = $_POST['uasmtk'];

    $harian2 = $_POST['harianindonesia'];
    $tugas2 = $_POST['tugasindonesia'];
    $uts2 = $_POST['utsindonesia'];
    $uas2 = $_POST['uasindonesia'];

    $harian3 = $_POST['harianinggris'];
    $tugas3 = $_POST['tugasinggris'];
    $uts3 = $_POST['utsinggris'];
    $uas3 = $_POST['uasinggris'];

    $harian4 = $_POST['harianproduktif'];
    $tugas4 = $_POST['tugasproduktif'];
    $uts4 = $_POST['utsproduktif'];
    $uas4 = $_POST['uasproduktif'];

    class Rapot {

        public $rata1;
        public $rata2;
        public $rata3;
        public $rata4;

        public function rata_rata($harian, $tugas, $uts, $uas) {
            return ($harian + $tugas + $uts + $uas) / 4;
        }

        public function status($grade) {
            return $grade >= 75 ? "Tuntas" : "Belum Tuntas";
        }

        public function mtk($harian, $tugas, $uts, $uas) {
            $this->rata1 = $this->rata_rata($harian, $tugas, $uts, $uas);
            return $this->status($this->rata1);
        }

        public function indo($harian, $tugas, $uts, $uas) {
            $this->rata2 = $this->rata_rata($harian, $tugas, $uts, $uas);
            return $this->status($this->rata2);
        }

        public function inggris($harian, $tugas, $uts, $uas) {
            $this->rata3 = $this->rata_rata($harian, $tugas, $uts, $uas);
            return $this->status($this->rata3);
        }

        public function produktif($harian, $tugas, $uts, $uas) {
            $this->rata4 = $this->rata_rata($harian, $tugas, $uts, $uas);
            return $this->status($this->rata4);
        }
    }

    // Create an instance of the Rapot class
    $cetak = new Rapot();

    // Call methods on the $cetak object
    $cetak->mtk($harian1, $tugas1, $uts1, $uas1); 
    $cetak->indo($harian2, $tugas2, $uts2, $uas2); 
    $cetak->inggris($harian3, $tugas3, $uts3, $uas3);  
    $cetak->produktif($harian4, $tugas4, $uts4, $uas4); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table align="center" method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo isset($nama) ? $nama : ''; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo isset($kelas) ? $kelas : ''; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo isset($jurusan) ? $jurusan : ''; ?></td>
            </tr>
        </table>
        
        <table align="center" border="1" cellspacing="0" cellpadding="0" width="50%"> <br>
            <tr>
                <td><center>Mapel</center></td>
                <td><center>Harian</center></td>
                <td><center>Tugas</center></td>
                <td><center>UTS</center></td>
                <td><center>UAS</center></td>
                <td><center>Rata-Rata</center></td>
                <td><center>Status</center></td>
            </tr>
            <tr>
                <td><center>Matematika</center></td>
                <td><center><?php echo $harian1; ?></center></td>
                <td><center><?php echo $tugas1; ?></center></td>
                <td><center><?php echo $uts1; ?></center></td>
                <td><center><?php echo $uas1; ?></center></td>
                <td><center><?php echo $cetak->rata_rata($harian1, $tugas1, $uts1, $uas1); ?></center></td>
                <td><center><?php echo $cetak->mtk($harian1, $tugas1, $uts1, $uas1); ?></center></td>
            </tr>
            <tr>
                <td><center>Bahasa Indonesia</center></td>
                <td><center><?php echo $harian2; ?></center></td>
                <td><center><?php echo $tugas2; ?></center></td>
                <td><center><?php echo $uts2; ?></center></td>
                <td><center><?php echo $uas2; ?></center></td>
                <td><center><?php echo $cetak->rata_rata($harian2, $tugas2, $uts2, $uas2); ?></center></td>
                <td><center><?php echo $cetak->indo($harian2, $tugas2, $uts2, $uas2); ?></center></td>
            </tr>
            <tr>
                <td><center>Bahasa Inggris</center></td>
                <td><center><?php echo $harian3; ?></center></td>
                <td><center><?php echo $tugas3; ?></center></td>
                <td><center><?php echo $uts3; ?></center></td>
                <td><center><?php echo $uas3; ?></center></td>
                <td><center><?php echo $cetak->rata_rata($harian3, $tugas3, $uts3, $uas3); ?></center></td>
                <td><center><?php echo $cetak->inggris($harian3, $tugas3, $uts3, $uas3); ?></center></td>
            </tr>
            <tr>
                <td><center>Produktif</center></td>
                <td><center><?php echo $harian4; ?></center></td>
                <td><center><?php echo $tugas4; ?></center></td>
                <td><center><?php echo $uts4; ?></center></td>
                <td><center><?php echo $uas4; ?></center></td>
                <td><center><?php echo $cetak->rata_rata($harian4, $tugas4, $uts4, $uas4); ?></center></td>
                <td><center><?php echo $cetak->produktif($harian4, $tugas4, $uts4, $uas4); ?></center></td>
            </tr>
        </table>
    </center>
</body>
</html>


