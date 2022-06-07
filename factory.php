<?php 

class Computer //Bilgisayar sınıfı oluşturuldu.
{
    private $model;
    private $fiyat;

    public function __construct($model,$fiyat)
    {
        $this->model = $model;
        $this->fiyat = $fiyat;
    }

    public function getModelFiyat()
    {
        return $this->model .' '. $this->fiyat;
    }

}

class computerFactory //Bilgisayar sınıfından obje oluşturmaya yarayan sınıf/arayüz.
{
    public static function create($model,$fiyat)
    {
        return new Computer($model,$fiyat);
    }
}

//Bilgisayar sınıfından iki adet obje ''computerFactory' sınıfının 'create' metodu ile oluşturuldu.
$laptop = computerFactory::create('Laptop','1000$'); 
$desktop = computerFactory::create('Desktop','2000$');

//Oluşturulan nesnelerin özellikleri ekrana yazdırıldı
print_r($laptop->getModelFiyat().' '.$desktop->getModelFiyat());
/*
Çıktı:
Laptop 1000$ Desktop 2000$
*/

?>