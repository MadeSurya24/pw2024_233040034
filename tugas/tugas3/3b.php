<?php 

    function urutanAngka ($angka) {
        $UrutanAngka = 1;
        for ($i = 1; $i <= $angka; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "$UrutanAngka ";
                $UrutanAngka++;
            }
            echo "<br>";
        }
        return;
    }

    echo urutanAngka (5);



?>