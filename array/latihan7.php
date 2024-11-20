<?php

    $buah =[
           [
            "nama_pemilik" => "Farhan",
            "buah" => [
                "buah1"=>[
                    "nama_buah" => "Anggur",
                    "buahku" => [
                        "jenis1" => "Anggur Ijo",
                        "jenis2" => "Anggur Merah",
                    ],
                ]
                ]
            ],
                
            [
                "nama_pemilik" => "eva",
                "buah" => [
                   "buah1"=> [
                        "nama_buah" => "Apel",
                        "buahku" => [
                            "jenis1" => "Apel Ijo",
                            "jenis2" => "Apel Merah",
                        ],
                    ],

                       "buah2"=>[
                        "nama_buah" => "Alpukat",
                        "buahku" => [
                            "jenis1" => "Alpukat Mentega",
                            "jenis2" => "Alpukat Biasa",
                        ],
                    ]
                    ]
                ],

            ];
        

    foreach($buah as $buahkuu){
        echo "Nama Pemilik  : ".$buahkuu["nama_pemilik"]."<br>";
        echo "Daftar Buah Kesukaan : <br>";
        echo"<ul>";
        foreach ($buahkuu["buah"] as $sehat){
            echo $sehat["nama_buah"]."<br>";

            foreach ($sehat["buahku"] as $buah) {
                echo "<li>" .$buah."</li>";

            }
        }


        echo "</ul>";
        echo "<hr>";   
    }
    


      

?>