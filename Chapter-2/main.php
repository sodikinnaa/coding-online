<?php

class Mobil{
    private $merk;
    private $model;

    // Kontruktor
    public function __construct($merk, $model){
        $this->merk = $merk;
        $this->model = $model;
    }
    
    // Method untuk menampilkan informasi mobil
    public function tampilkanInfo(){
        return "Merk : ".$this->merk.", Model: ". $this->model; 
    }
}
// Membuat objek dari class Mobil
$mobilSAya = new Mobil("Toyota", "Avanza");
echo $mobilSAya->tampilkanInfo(); // Output : Merk : Toyota, Model: Avanza

?>