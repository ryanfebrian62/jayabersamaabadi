<?php
class mobil {
    //variabel didalam class
    public $merk;
    public $tahun;
    private $statusmesin;

    //fungsi didalam class
    public function hidupkanmesin(){
        return "mesin mobil menyala!";
    }
}

//membuat objek baru dari class mobil
$MobilA = new mobil();
$MobilA->merk ="Porsche";
$MobilA->tahun ="2018";

echo "merk mobil:".$MobilA->merk. "<br>";
echo "tahun mobil:".$MobilA->tahun. "<br>";
echo "status mesin:".$MobilA->hidupkanmesin();
?>