<?php
class motor {
    public $warna;
    public $merk;

    public function __construct($warna,$merk){
        $this->warna = $warna;
        $this->merk = $merk;
    }

    public function berjalan(){
        echo "motor berjalan di jalanan";
    }
}

class mobil extends motor{
    public $tipe;

    public function __construct($warna,$merk,$tipe){
        $this->warna = $warna;
        $this->merk = $merk;
        $this->tipe = $tipe;
    }

    public function ngedrift(){
        echo "mobil akan ngedrift seperti garasi drift";
    }
}

$mazda =  new mobil("hitam","mazda","RX7");
echo $mazda->ngedrift();