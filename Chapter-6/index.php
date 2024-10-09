<?php
// Meng-include file kelas Kendaraan
include 'Kendaraan.php';

// Membuat objek dari kelas Kendaraan
$kendaraan1 = new Kendaraan("Toyota");
$kendaraan2 = new Kendaraan("Honda");

// Mendemonstrasikan penggunaan objek
echo "Sekarang kita menggunakan kendaraan. \n";

// Menggunakan objek dalam cakupan
unset($kendaraan1); // Menghancurkan objek secara manual

// Objek kedua (kendaraan2) akan dihancurkan saat memasuki akhir skrip
?>
