<?php                       //class menginplemasikan secra dinamis   
class Opera 
{
    public function Persegi($panjang, $tinggi) : float
    {
        $hasil = $panjang*$tinggi;
        echo "luasnya = ".$hasil."\n";
        if ($panjang < 0) {
            throw new Exception("Error  broo makanya seriusssss");
            $hasil = $panjang* $lebar;
            return $hasil;

        }
    }
    public function Lingkaran($diameter)
    {
        $jari = $diameter/2;
        $hasil1 = 3.14*($jari*$jari);
        echo "hasilnya = ".$hasil1."\n";
    }
    public function trafesium($sisi1, $sisi2, $tinggi)
    {
        $hasil2 = 1/2*($sisi1+$sisi2)*$tinggi;
        echo "Hasilnya = ".$hasil2."\n";
    }
}

class Op extends Opera
{
    public function segi()
    {  
        echo " ==================== "."\n";
        echo " |    PERSEGEGI    | "."\n";
        echo " ==================== "."\n";   
        echo "Panjang :";
        $panjang =(int) trim(fgets(STDIN));
        echo "Lebar :";
        $lebar = (int) trim(fgets(STDIN));
        Opera::Persegi($panjang, $lebar)."\n";
 
    }

    public function linka()
    {
        echo " ==================== "."\n";
        echo " |     LINGKARAN    | "."\n";
        echo " ==================== "."\n";
        echo "Jari-Jari :";
        $diameter =(int) trim(fgets(STDIN));
        Opera::Lingkaran($diameter)."\n";
    }

    public function trafe()
    {
        echo " ==================== "."\n";
        echo " |     TRAFESIUM    | "."\n";
        echo " ==================== "."\n";
        echo "Sisi Sejajar A :";
        $sisi1 =(int) trim(fgets(STDIN));
        echo "Sisi Sejajar B :";
        $sisi2 = (int) trim(fgets(STDIN));
        echo "Tinggi :";
        $tinggi = (int) trim(fgets(STDIN));
        Opera::trafesium($sisi1, $sisi2, $tinggi)."\n";
    }
    
    
}

$oo2 = new Op();

$kondisi = true;
while ($kondisi) {
echo " ==================== "."\n";
echo " |       Welcome    | "."\n";
echo " ==================== "."\n";
echo "1. Persegi"."\n"."2. Lingkaran"."\n"."3. Trafesium"."\n"."4. Keluar"."\n";
echo "Mau Hitung apa ? ";
$pilihan = (int) trim(fgets(STDIN));  
switch ($pilihan) {
    case 1:
        $oo2->segi();

        echo "\n\n";
        echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
        $pilih = trim(fgets(STDIN));
        if($pilih == 'Y' || $pilih == 'y'){
            $kondisi = true;
        }elseif($pilih == 'N' || $pilih == 'n'){
            $kondisi = false;
        }
        break;
    case 2:
        $oo2->linka();

        echo "\n\n";
        echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
        $pilih = trim(fgets(STDIN));
        if($pilih == 'Y' || $pilih == 'y'){
            $kondisi = true;
        }elseif($pilih == 'N' || $pilih == 'n'){
            $kondisi = false;
        }
        break;
    case 3:
        $oo2->trafe();

        echo "\n\n";
        echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
        $pilih = trim(fgets(STDIN));
        if($pilih == 'Y' || $pilih == 'y'){
            $kondisi = true;
        }elseif($pilih == 'N' || $pilih == 'n'){
            $kondisi = false;
        }
        break;
    case 4:
        $kondisi = false;
        break;
    default:
        echo "nonono";

}
}

?>