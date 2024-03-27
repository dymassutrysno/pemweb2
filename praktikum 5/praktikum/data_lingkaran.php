<?php
require_once "class_lingkaran.php";
echo "NILAI PHI = " . Lingkaran::PHI;
// instansiasi object Lingkaran
$lingkar1 = new Lingkaran(10); //angka 10 adalah objek yang harus diisi karena kita memakai perintah construct pada function class_lingkaran.php
$lingkar2 = new Lingkaran(8);

// pemanggilan method
echo "<br>Luas Lingkaran 1 = " . $lingkar1->getluas();
echo "<br>Luas Lingkaran 2 = " . $lingkar2->getluas();

echo "<br>Keliling Lingkaran 1 = " . $lingkar1->getKeliling();
echo "<br>Keliling Lingkaran 2 = " . $lingkar2->getKeliling();  
?>