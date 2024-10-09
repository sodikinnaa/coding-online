<?php
class Kendaraan {
    public $warna;

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function bergerak() {
        echo "Kendaraan bergerak. \n";
    }
}

class Mobil extends Kendaraan {
    public function bergerak() {
        echo "Mobil sedang berjalan. \n";
    }
}
?>
