<?php 
class Pesan {
    public function tampilkanPesan($pesan){
        echo $pesan;
    }
}

$pesanObejk = new Pesan();
$pesanObejk->tampilkanPesan("Sodikin Merupakan alumni Teknokat");
?>