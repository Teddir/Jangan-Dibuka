<?php       //yang membedakan closure atu tidak terletak pada functionnya kalau closure function di akhirkan dan variable di majukan
        echo " ==================== "."\n";
        echo " |     SEGITIGA     | "."\n";
        echo " ==================== "."\n";
        echo "1. Luas"."\n"."2. Keliling"."\n";
        echo "Mau Hitung apa ? ";
        $pilihan = (int) trim(fgets(STDIN));
        $Luas=function($a, $t){
            return $a*$t;
        };
        $Kelilng=function($a, $b, $c){
            return $a+$b+$c;
        };
        if ($pilihan == 1) {
            echo "Alas :";
            $panjang =(int) trim(fgets(STDIN));
            echo "Tinggi :";
            $lebar = (int) trim(fgets(STDIN));
            echo "Luas = ".$Luas($panjang, $lebar)."\n";
        }elseif ($pilihan == 2) {
            echo "Sisi A :";
            $sisia =(int) trim(fgets(STDIN));
            echo "Sisi B :";
            $sisib = (int) trim(fgets(STDIN));
            echo "Sisi c :";
            $sisic = (int) trim(fgets(STDIN));
            echo "Keliling = ".$Kelilng($sisia, $sisib, $sisic)."\n";
        }else {
        echo "Maaf Nilai Tidak Ditemukan";
    };
    
        echo " ==================== "."\n";
        echo " |     LINGKARAN    | "."\n";
        echo " ==================== "."\n";
        echo "1. Luas"."\n"."2. Keliling"."\n"."3. Diameter"."\n";
        echo "Mau Hitung apa ? ";
        $pilihan = (int) trim(fgets(STDIN));
        $Luas=function($v ,$r){
            return $v*$r*$r;
        };
        $Kelilng=function($d, $r, $v ){
            return $v*2*$r;
        };
        $Diameter=function($r, $a){
            return 2*$r;
        };
        if ($pilihan == 1) {
        echo "Nilai n :";
        $nilain =(int) trim(fgets(STDIN));
        echo "Jari-Jari :";
        $Jaja = (int) trim(fgets(STDIN));
        echo "Luas = ".$Luas($nilain, $Jaja)."\n";
        }elseif ($pilihan == 2) {
        echo "Nilai n :";
        $nilan =(int) trim(fgets(STDIN));
        echo "Jari-jarii :";
        $Jari_jarii = (int) trim(fgets(STDIN));
        echo "Keliling = ".$Kelilng($nilan, $Jari_jarii, 2)."\n";
        }elseif ($pilihan == 3) {
            echo "Jari-jari :";
            $Jari_jar =(int) trim(fgets(STDIN));
            echo "Diameter = ".$Diameter($Jari_jar, 2)."\n";
        }else {
        echo "Maaf Nilai Tidak Ditemukan";
        };

        echo " ==================== "."\n";
        echo " |     TRAFESIUM    | "."\n";
        echo " ==================== "."\n";
        echo "1. Luas"."\n"."2. Keliling"."\n";
        echo "Mau Hitung apa ? ";
        $pilihan = (int) trim(fgets(STDIN));
    
    $Luas=function($ss, $sss, $t){
    return $ss+$sss*$t/2;
    };
    $Kelilng=function($a, $b, $c, $d){
    return $a+$b+$c+$d;
    };
    if ($pilihan == 1) {
    echo "Sisi Sejajar A :";
    $sisia =(int) trim(fgets(STDIN));
    echo "Sisi Sejajar B :";
    $sisib = (int) trim(fgets(STDIN));
    echo "Tinggi :";
    $tinggi = (int) trim(fgets(STDIN));
    echo "Luas = ".$Luas($sisia, $sisib, $tinggi, 2)."\n";
    }elseif ($pilihan == 2) {
    echo "Sisi A :";
    $sisia =(int) trim(fgets(STDIN));
    echo "Sisi B :";
    $sisib = (int) trim(fgets(STDIN));
    echo "Sisi C :";
    $sisic = (int) trim(fgets(STDIN));
    echo "Sisi D :";
    $sisid = (int) trim(fgets(STDIN));
    echo "Keliling = ".$Kelilng($sisia, $sisib, $sisic, $sisid)."\n";
    }else {
    echo "Maaf Nilai Tidak Ditemukan";
    }
