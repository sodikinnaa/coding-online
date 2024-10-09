<?php
class Hewan {
    public function suara() {
        return "Hewan berbunyi.";
    }
}

class Kucing extends Hewan {
    public function suara() {
        return "Meow!";
    }
}

class Anjing extends Hewan {
    public function suara() {
        return "Woof!";
    }
}
?>