<?php
class Mobil {
    public $merek;
    public $tahun;

    public function __construct($merek, $tahun) {
        $this->merek = $merek;
        $this->tahun = $tahun;
    }

    public function info() {
        return "Merek: $this->merek, Tahun: $this->tahun. | ";
    }
}
?>