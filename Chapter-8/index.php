<?php
// Meng-include file kelas ContohModifier
include 'ContohModifier.php';

// Membuat objek dari kelas ContohModifier
$objek = new ContohModifier("Public Value", "Protected Value", "Private Value");

// Mengakses properti publik
echo "Akses properti publik: " . $objek->publicProperty . " \n"; // Dapat diakses

// Mengakses metode untuk menampilkan semua properti
$objek->mostrarProperties();

// Mengakses properti protected (ini akan menyebabkan kesalahan)
/*
echo "Akses properti protected: " . $objek->protectedProperty . " \n"; // ERROR
*/

// Mengakses properti private (ini juga akan menyebabkan kesalahan)
/*
echo "Akses properti private: " . $objek->privateProperty . " \n"; // ERROR
*/
?>
