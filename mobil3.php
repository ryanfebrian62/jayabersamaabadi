<?php
// kelas induk
class Kendaraan {
    public function berjalan() {
        return "Kendaraan sedang berjalan.";
    }
}

// kelas anak SepedaMotor
class SepedaMotor extends Kendaraan {
    public function berjalan() {
        return "Motor melaju kencang!";
    }
}

// kelas anak Mobil
class Mobil extends Kendaraan {
    public function berjalan() {
        return "Mobil berjalan pelan.";
    }
}

// untuk Membuat objek
$motor = new SepedaMotor();
$mobil = new Mobil();

// Output
echo $motor->berjalan() . "<br>"; // Motor melaju kencang!
echo $mobil->berjalan();          // Mobil berjalan pelan.
?>
