<?php
class Mahasiswa
{
    // data mahasiswa
    public $nama;
    public $npm;
    public $jurusan;

    // Konstruktor
    public function __construct($nama, $npm, $jurusan)
    {
        $this->nama = $nama;
        $this->npm = $npm;
        $this->jurusan = $jurusan;
    }
    // metode
    public function tampilkanInformasi()
    {
        echo "Nama : $this->nama, NPM : $this->npm, Jurusan: $this->jurusan";
    }    
}

?>
