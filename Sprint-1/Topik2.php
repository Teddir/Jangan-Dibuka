<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Topik-2</title>
</head>
<body>
<h3><header>Latihan 1</header></h3>
<?php
//Luas Persegi

$p = 5;
$l = 8;
$Panjang = $p;  
$Lebar = $l;
$hasil_perhitungan = $p * $l;
$luas = $hasil_perhitungan; 
echo "Diket :<br>Panjang Persegi = 5 <br> Lebar Persegi = 8 <br> Luas Persegi = L x P<br>";
echo "1. luas dari persegi adalah $luas";

echo "<br>";
?>

<h3><header>Latihan 2</header></h3>
<?php
$diameter = 9;
$nilaia = 3.14;
$nilaib = $keliling;

$jari = $diameter/2;
$jari1 = $jari*$jari;
$jumlah_luas = $nilaia * $jari1;
$luas = $jumlah_luas;
$keliling = 2*$nilaia*$jari;
echo "Diket :<br>Diameter Lingkaran = 9<br>Luas = ? <br>Keliling = ?<br> Luas = $luas<br>Keliling = $keliling";    
?>
<br>
<h3><header>Latihan 3</header></h3>
<?php

$c = 34;
$rumus = 4/5*$c;
$reamur = $rumus;
echo "Diket<br>Suhu celcius/C = 34<br>Reamur = (4/5) C<br>Jadi suhu reamur adalah $reamur <br>";
echo "<br>";
$rumus2 = $c+273;
$kelvin = $rumus2;
echo "Diket<br>Suhu celcius/C = 34<br>Kelvin = C + 273<br>Jadi suhu kelvin adalah $kelvin <br>";
echo "<br>";
$rumus1 = 9/5*$c+32;
$fahrenheit = $rumus1;
echo "Diket<br>Suhu celcius/C = 34<br>Fahrenheit = (9/5) C + 32<br>Jadi suhu fahrenheit adalah $fahrenheit";


?>
<h3><header>Latihan 4</header></h3>
<?php
for ($i=0; $i <= 40 ; $i+=2) { 
    if ($i == 8) {
        echo "Diket :<br>N = 5, 9, 19<br>Jika N5 =Nilai r adalah 8 <br>";
    }if ($i == 16) {
        echo "Jika N9 = Nilai r adalah 16 <br>";
    }if ($i == 36) {
        echo "Jika N19 = Nilai r adalah 36";
    }
    
}


?>

