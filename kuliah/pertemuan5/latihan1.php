<?php 
// 1. Membuat Array
    // Cara lama
        $harilama = array("Senin","Selasa","Rabu");
    // Cara baru
        $bulan = ["Januari","Februari","Maret"];
        $haribaru = ["Senin","Selasa","Rabu"];
        $mahasiswa = ["Made", 3.1 , false];

// 2. Mencetak Isi Array  
    // Mencetak 1 nilai pada array, menggunakan index, index dimulai dari 0
        echo $bulan[1];
        echo "<br>";
        echo $bulan[0];
        echo "<br>";
        echo $haribaru[0];
        echo "<br>";
        echo $haribaru[0] . " " . $haribaru[1];
        echo "<hr>";
    // Mencetak semua isi array
        // var_dump() atau print_r() (digunakan saat debugging)
            var_dump($haribaru);
            echo "<br>";
            print_r($haribaru);
            echo "<br>";
            print_r($bulan);
            echo "<br>";
            var_dump($harilama);
            echo "<br>";
            var_dump($mahasiswa);
            echo "<br>";
            print_r($mahasiswa);
            echo "<hr>";
// 3. Memanipulasi Isi Array
    // Menambah Isi Array
        // Menambah di akhir : [] atau array_push()
            $haribaru[] = "Kamis";
            $haribaru[] = "Jumat";
            print_r($haribaru);
            echo "<br>";
            array_push($bulan, "April", "Mei");
            print_r($bulan);
            echo "<br>";
        // Menambah di awal : array_unshift()
            array_unshift($mahasiswa, "233040034");
            print_r($mahasiswa);
            echo "<br>";  
            array_unshift($haribaru, "Minggu");
            print_r($haribaru);
            echo "<hr>";
    // Menghapus isi array
        // Menghapus di akhir : array_pop()
            array_pop($bulan);
            print_r($bulan);
            echo "<br>";
        // Menghapus di awal : array_shift()
            array_shift($haribaru);
            print_r($haribaru)








?>