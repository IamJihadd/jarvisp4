<?php

class kucing{
    public $nama;
    public $jumlah_kucing;

    public function __construct($nama){
        self::$jumlah_kucing++;
        $this->nama = $nama;
    }

    public static function getjumlahkucing(){
        echo "<br> jumlah kucing:" .self::$jumlah_kucing;
    }
}

$oyen = new kucing("oyen");
kucing::getjumlahkucing();

$bleki = new kucing("bleki");
kucing::getjumlahkucing();