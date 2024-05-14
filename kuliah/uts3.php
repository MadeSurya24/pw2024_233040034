<?php 

    function cetak_bintang ($angka) {
        $cetak_bintang = '*';
        for ($i = 1; $i <= $angka; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "$cetak_bintang ";
                $cetak_bintang++;
            }
            echo "<br>";
        }
        return;
    }

    echo cetak_bintang (5);



?>