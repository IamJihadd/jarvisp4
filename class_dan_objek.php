<?php

class mobil {
    //deklarasi properti
    private $merk;
    private $warna;

    //functio
    public function setmerk($merk){
        $this -> merk = $merk;
    }
    public function getmerk($merk){
        echo $this -> merk;
    }

    public function getwarna($warna){
        echo $this -> merk;
    }

    public function setwarna($warna){
        $this -> warna = $warna;
    }

    public function hidupkanmesin(){
        echo "mesin mobil dihidupkan";
    }

    public function jalan(){
        echo "mobil berjalan";
    }
}

$toyota = new mobil();
$toyota->setmerk("toyota");
$toyota->setwarna("hitam");
$toyota->getmerk();
echo "<br>";
$toyota -> hidupkanmesin();
echo "<br>";
$toyota->jalan();