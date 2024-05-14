<?php

// Koneksi Ke Database
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040034');

// Querry ke Tabel Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Menyiapkan Data Mahasiswa
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

?>