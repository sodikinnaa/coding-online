<?php
class Kendaraan {
    public $merek;
    // Konstruktor
    public function __construct($merek) {
        $this->merek = $merek;
        echo "Objek kendaraan dengan merek {$this->merek} telah dibuat. \n";
    }
    // Destruktor
    public function __destruct() {
        echo "Objek kendaraan dengan merek {$this->merek} telah dihancurkan.  \n";
    }
}
?>
