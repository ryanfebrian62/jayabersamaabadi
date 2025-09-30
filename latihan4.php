<?php
interface Pembayaran {
    public function prosesPembayaran();
}

// kelas KartuKredit yang implements Pembayaran
class KartuKredit implements Pembayaran {
    public function prosesPembayaran() {
        return "Pembayaran dengan Kartu Kredit diproses.";
    }
}

// kelas DompetDigital yang implements Pembayaran
class DompetDigital implements Pembayaran {
    public function prosesPembayaran() {
        return "Pembayaran dengan Dompet Digital diproses.";
    }
}

// Membuat objek
$kartu = new KartuKredit();
$dompet = new DompetDigital();

// Output
echo $kartu->prosesPembayaran() . "<br>";
echo $dompet->prosesPembayaran();
?>
