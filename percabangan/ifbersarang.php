<?php
 
 $jurusan = "TKRO";
 $kelas = "11 TKRO";

 if ($jurusan == "RPL") {

    if($kelas == "10 RPL"){
        echo "ini kelas 10 RPL";
    }elseif ($kelas == "11 RPL"){
        echo "inI kelas 11 RPL";
    }elseif ($kelas == "12 RPL"){
        echo "ini kelas 12 RPL";
    }else{
        echo "kelas tidak tersedia";
    }


 }elseif($jurusan == "TKRO"){

 if($kelas == "10 TKRO"){
    echo "ini kelas 10 TKRO";
}elseif ($kelas == "11 TKRO"){
    echo "ini kelas 11 TKRO";
}elseif ($kelas == "12 TKRO"){
    echo "ini kelas 12 TKRO";
}else{
    echo "kelas tidak tersedia";
}


 }elseif($jurusan == "TBSM"){

 if($kelas == "10 TBSM"){
    echo "ini kelas 10 TBSM";
}elseif ($kelas == "11 TBSM"){
    echo "inI kelas 11 TBSM";
}elseif ($kelas == "12 TBSM"){
    echo "ini kelas 12 TBSM";
}else{
    echo "kelas tidak tersedia";
}
 }else {
    echo "jurusan tidak ada";
 }
?>