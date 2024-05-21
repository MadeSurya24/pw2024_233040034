<?php

function koneksi() {
// Koneksi Ke Database
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040034');
return $conn;
}
function query($query) {
// Koneksi Ke Database
$conn = koneksi();

// Querry ke Tabel Mahasiswa
$result = mysqli_query($conn, $query);

// Menyiapkan Data Mahasiswa
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

return $rows;

}


?>