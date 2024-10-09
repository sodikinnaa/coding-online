<?php
// Meng-include file kelas Kendaraan
include 'Kendaraan.php';

// Membuat objek dari kelas Kendaraan
$kendaraan = new Kendaraan();
$kendaraan->setWarna("Merah");
echo "Warna Kendaraan: " . $kendaraan->getWarna() . " \n";
$kendaraan->bergerak(); // Memanggil metode dari superclass

// Membuat objek dari kelas Mobil
$mobil = new Mobil();
$mobil->setWarna("Biru");
echo "Warna Mobil: " . $mobil->getWarna() . " \n";
$mobil->bergerak(); // Memanggil metode dari subclass
?>
