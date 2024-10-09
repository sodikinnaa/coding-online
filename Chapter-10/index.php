<?php
// Meng-include file kelas Hewan
include 'Hewan.php';

// Membuat array objek Hewan
$hewanArray = [new Kucing(), new Anjing()];

// Iterasi dan panggil metode suara
foreach ($hewanArray as $hewan) {
    echo $hewan->suara() . " \n";
}
?>
