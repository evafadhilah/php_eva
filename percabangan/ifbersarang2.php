<?php

$provinsi = "jawa timur";
$kota = "madiun";

//provinsi jawa barat
if ($provinsi == "jawa barat" ) {
    
if ($kota == "bandung") {
    echo "selamat datang di kota bandung";
}elseif ($kota == "cimahi") {
    echo "selamat datang di kota cimahi";
}elseif ($kota == "bogor") {
    echo "selamat datang di kota bogor";
}elseif ($kota == "bekasi") {
    echo "selamat datang di kota bekasi";
}elseif ($kota == "depok") {
    echo "selamat datang di kota depok";
}else{
    echo "kota tidak tersedia";
}


//provinsi jawa timur
}elseif ($provinsi == "jawa timur") {
    
    if ($kota == "surabaya") {
        echo "selamat datang di kota surabay";
    }elseif ($kota == "kediri") {
        echo "selamat datang di kota kediri";
    }elseif ($kota == "madiun") {
        echo "selamat datang di kota madiun";
    }elseif ($kota == "blitar") {
        echo "selamat datang di kota blitar";
    }elseif ($kota == "malang") {
        echo "selamat datang di kota malang";
    }else{
        echo "kota tidak tersedia";
    }


//provinsi jawa tengah
}elseif ($provinsi == "jawa tengah") {
    
    if ($kota == "batang") {
        echo "selamat datang di kota batang";
    }elseif ($kota == "kajen") {
        echo "selamat datang di kota kajen";
    }elseif ($kota == "klaten") {
        echo "selamat datang di kota klaten";
    }elseif ($kota == "purwakarta") {
        echo "selamat datang di kota purwakarta";
    }elseif ($kota == "purworejo") {
        echo "selamat datang di kota purworejo";
    }else{
        echo "kota tidak tersedia";
    }
}


?>