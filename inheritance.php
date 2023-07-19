<?php

class hero{
    public $nama;
    public $kekuatan;
    public $attack;
    public $hp;

    public function __construct($nama, $attack,$hp){
        $this->nama = $nama;
        $this->attack = $attack;
        $this->hp = $hp;
    }

    public function skill(){
        echo "$this->nama menggunakan skill";
    }
}

class mage extends hero{
    public $mana;
    public $magic_attack;

    public function __construct($nama,$attack,$hp,$mana,$magic_attack){
        parent::__construct($nama,$attack,$hp);
        $this->mana = $mana;
        $this->magic_attack = $magic_attack;
    }
    public function skill(){
        echo "$this->nama menggunakan magic skill";
    }
}

$kagura = new mage("kagura",0,3200,1000,400);
echo $kagura->nama;
echo "<br>";
$kagura->skill();