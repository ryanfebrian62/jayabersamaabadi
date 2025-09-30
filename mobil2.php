<?php
class mobil {
    public $merk;
    public $tahun;
    private $statusmesin;
    private $nomorrangka;

    public function __construct($nomorrangka) {
        $this->nomorrangka = $nomorrangka;
    }

    public function hidupkanmesin(){
        return "mesin mobil menyala!";
    }
    public function getnomorrangka() {
        return $this->nomorrangka;
    }
}

$MobilA = new mobil("37371863-cbcdg");
$MobilA->merk ="Porsche";
$MobilA->tahun ="2018";



echo "merk mobil:".$MobilA->merk. "<br>";
echo "tahun mobil:".$MobilA->tahun. "<br>";
echo "nomor rangka mobil:".$MobilA->getnomorrangka(). "<br>";
echo "status mesin:".$MobilA->hidupkanmesin();
?>