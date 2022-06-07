<?php

class araba //araba sınıfı oluşturuldu
{
    private $marka;
    private $model;
    private $fiyat;
    private $km;

    public function __construct($marka,$model,$fiyat,$km)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->fiyat = $fiyat;
        $this->km = $km;
    }

    public function __clone() //klonlame metodu
    {

    }

}

$bmw = new araba('bmw','model1','10000$','1000km'); //ilk araba objesi oluşturuldu
var_dump($bmw);
$bmw2 = clone $bmw; //ilk araba objesi klonlanarak çoğaltıldı
var_dump($bmw2);

?>