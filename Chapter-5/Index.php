<?php
// Meng-include file kelas Mobil
include 'Mobil.php';

// Membuat objek dari kelas Mobil
$mobil1 = new Mobil("Toyota", 2020);
$mobil2 = new Mobil("Honda", 2021);

// Memanggil metode info pada objek mobil1
echo $mobil1->info(); // Output: Merek: Toyota, Tahun: 2020. 
 // Baris baru
// Memanggil metode info pada objek mobil2
echo $mobil2->info(); // Output: Merek: Honda, Tahun: 2021. 
?>