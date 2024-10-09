<?php

// Mendefinisikan kelas 
abstract class Kendaraan {
    protected $merk;

    public function __construct($merk){
        $this->merk = $merk;
    }

    // Method abstrak
    abstract public function bergerak();
}

// Kelas yang mewarisi kendaraan
class Mobil extends Kendaraan {
    public function bergerak(){
        return "$this->merk sedang bergerak.";
    }
}
// Menggunakan objek
$mobilSaya = new Mobil("toyota");
echo $mobilSaya->bergerak();