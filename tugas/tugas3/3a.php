<?php 

    echo "<h4>Menghitung Luas Lingkaran</h4>";

    function hitungLuasLingkaran($r) {
        $LuasLingkaran = 3.14 * $r**2;
        echo "Jari-jari = $r cm <br>";
        echo "Luas lingkaran = $LuasLingkaran cm<sup>2</sup>";

        return $LuasLingkaran;
    }

    hitungLuasLingkaran(10);
    echo "<hr>";

    echo "<h4>Menghitung Keliling Lingkaran</h4>";

    function hitungKelilingLingkaran($r) {
        $KelilingLingkaran = 2 * 3.14 * $r;
        echo "Jari-jari = $r cm <br>";
        echo "Keliling lingkaran = $KelilingLingkaran cm";

        return $KelilingLingkaran;
    }

    hitungKelilingLingkaran(20);
    echo "<hr>"





?>