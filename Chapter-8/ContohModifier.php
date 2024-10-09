<?php
class ContohModifier {
    public $publicProperty; // Dapat diakses dari mana saja
    protected $protectedProperty; // Dapat diakses di dalam kelas dan subclass
    private $privateProperty; // Dapat diakses hanya di dalam kelas ini

    public function __construct($public, $protected, $private) {
        $this->publicProperty = $public;
        $this->protectedProperty = $protected;
        $this->privateProperty = $private;
    }

    public function mostrarProperties() {
        echo "Public: $this->publicProperty \n";
        echo "Protected: $this->protectedProperty \n";
        echo "Private: $this->privateProperty \n";
    }
}
?>
