<?php   //HIGHT LOWEST 
      echo "================= "."\n";
      echo "|     MEMOME    | "."\n";
      echo "================= "."\n";
      echo "====================================== "."\n";
      echo "| Jumlah data yang akan dimasukkan : 5, 9, 6, 7, 9, 8 , 10, 7, 8 |"."\n";    // Masukan beapa angka
      echo "====================================== "."\n";
      $jumlah = trim(fgets(STDIN));                           //Array akan Berjalan
      echo "====================================== "."\n";
      for ($i=1; $i <= $jumlah; $i++) { 
          echo "Input ke-".$i." : ";
          $nilai[] = trim(fgets(STDIN));
      }
      echo "====================================== "."\n";
      rsort($nilai);                                         //disortir
      
      echo "\n";
      
      for ($i=0; $i < 3; $i++) {               
          $max[] = $nilai[$i];
      }
      echo "Highest : ";
      print_r($max);
      
      sort($nilai);
      
      for ($i=0; $i < 3; $i++) { 
          $min[] = $nilai[$i];
      }
      echo "Lowest : ";
      print_r($min);
?>
    <?php                   //Latihan 1
$n = 9;
$i = 0;
while ($n <= 20 ) {
    echo "$n, ";
 $n+=2;
} 
?>
<br> 


<?php                       //latihan 1.1
$n1=9;
for ($b = 1; $b < $n1; $b++){
	if ($b == 2 || $b == 4 || $b == 6){
    	continue;
    }
    	echo "$b, ";
    }
?>

<?php          //Latihan 3.1
$n = 9;
    for ($x = 0; $x <= $n; $x++) {
        for ($y = 0; $y <= $x; $y++) {
            echo "+ ";
        }
        for ($k = $n; $k >= $y; $k--) {
            echo "-&nbsp&nbsp";
        }
        echo "<br>";
    }
?> 
+  -  -  -  -  -  -  -  -
+  +  -  -  -  -  -  -  -
+  +  +  -  -  -  -  -  -
+  +  +  +  -  -  -  -  -
+  +  +  +  +  -  -  -  -
+  +  +  +  +  +  -  -  -
+  +  +  +  +  +  +  -  -
+  +  +  +  +  +  +  +  -
+  +  +  +  +  +  +  +  +

<br>
<?php                //Latihan3.2
$n = 9;
for ($x = $n; $x >= 0; $x--) {
    for ($y = 0; $y <= $x; $y++) {
        echo "- &nbsp";
    }
    for ($k = $n; $k >= $y; $k--) {
        echo "+ ";
    }
    echo "<br>";
}
?>
-  -  -  -  -  -  -  -  +
-  -  -  -  -  -  -  +  +
-  -  -  -  -  -  +  +  +
-  -  -  -  -  +  +  +  +
-  -  -  -  +  +  +  +  +
-  -  -  +  +  +  +  +  +
-  -  +  +  +  +  +  +  +
-  +  +  +  +  +  +  +  +
+  +  +  +  +  +  +  +  +
<br>
<?php                //Latihan3.3

  $n = 9;
    for ($o = 1; $o <= $n; $o++) {
        for ($t = 1; $t <= $n; $t++) {
            if ((($o==1) || ($o==$n) )
            || (($o==2 && $t==2) ) || (($o==2 && $t==3) ) || (($o==2 && $t==4) ) || (($o==2 && $t==5) ) || (($o==2 && $t==6) ) || (($o==2 && $t==7) ) || (($o==2 && $t==8) ) 
            || (($o==3 && $t==3) ) || (($o==3 && $t==4) ) || (($o==3 && $t==5) ) || (($o==3 && $t==6) ) || (($o==3 && $t==7) ) 
            || (($o==4 && $t==4) ) || (($o==4 && $t==5) ) || (($o==4 && $t==6) )
            || (($o==5 && $t==5) )
            || (($o==8 && $t==2) ) || (($o==8 && $t==3) ) || (($o==8 && $t==4) ) || (($o==8 && $t==5) ) || (($o==8 && $t==6) ) || (($o==8 && $t==7) ) || (($o==8 && $t==8) ) 
            || (($o==7 && $t==3) ) || (($o==7 && $t==4) ) || (($o==7 && $t==5) ) || (($o==7 && $t==6) ) || (($o==7 && $t==7) ) 
            || (($o==6 && $t==4) ) || (($o==6 && $t==5) ) || (($o==6 && $t==6) )){
                echo "* ";
            } else {
                echo "- ";
            }
        }
        echo "<br>";
    }


    echo "<br>";

    ?>
+ + + + + + + + +
- + + + + + + + -
- - + + + + + - -
- - - + + + - - -
- - - - + - - - -
- - - + + + - - -
- - + + + + + - -
- + + + + + + + -
+ + + + + + + + +    
    
    <?php               //Latihan3.4
    $ukuran=9;
for($a=1; $a<=$ukuran; $a++){
	for($b=1; $b<=$ukuran; $b++){
		 if ((($a==1) || ($a==$ukuran) || ($a==5)) || ($b==1 && $a<=5) || ($b==9 && $a>=5 )) {
            echo "+";
        } else{
			echo " -&nbsp";
		}
	}
	echo "<br>";
}?>
+ + + + + + + + +
+ - - - - - - - -
+ - - - - - - - -
+ - - - - - - - -
+ + + + + + + + +
- - - - - - - - +
- - - - - - - - +
- - - - - - - - +
+ + + + + + + + +

?>
<?php   //Mean,Median,Modus
    echo "================= "."\n";
    echo "|     MEMOME    | "."\n";
    echo "================= "."\n";
    echo "====================================== "."\n";
    echo "| Jumlah data yang akan dimasukkan :  |"."\n";    // Masukan beapa angka
    echo "====================================== "."\n";
    $jumlah = trim(fgets(STDIN));                           //Array akan Berjalan
    echo "====================================== "."\n";
    for ($i=1; $i <= $jumlah; $i++) { 
        echo "Input ke-".$i." : ";
        $nilai[] = trim(fgets(STDIN));
    }
    echo "====================================== "."\n";
    echo "\n";
    
    echo "====================================== "."\n";    //mencari mean (dengan 1.sort 2.dibagi2)
    $count = count($nilai);
    echo "Mean : ";
    print_r(array_sum($nilai)/$count);
    
    echo "\n";
    
    sort($nilai);                                           // print_r($nilai);
    
    $media = $count/2;
    
    if (is_double($media)) {
        $meda = floor($media);
        $median = $nilai[$media];
    } else {
        $me = round($me);
        $median = ($nilai[$media-1] + $nilai[$media]) / 2;
    }
    
    echo "Median : ";
    print_r($median);
    
    echo "\n";
    
    $val = array_count_values($nilai);
    arsort($val);
    echo "Modus : ";
    foreach ($val as $k => $v) {
        if ($v == max($val)) {
            // echo "Modus : " . $k . " Frekuensi : " . $v;
            // echo "\n";
            echo $k . ", ";
        }
    }
    
    $frekuensi = max($val);
    echo "Frekuensi : " . $frekuensi;
    echo "\n";
    echo "====================================== "."\n";
    ?>  

                                                                                                                                                                                                                                                                                        <!-- <?php          //Latihan 3.1
$n = 9;
    for ($x = 0; $x <= $n; $x++) {
        for ($y = 0; $y <= $x; $y++) {
            echo "+ ";
        }
        for ($k = $n; $k >= $y; $k--) {
            echo "-&nbsp&nbsp";
        }
        echo "<br>";
    }
?>              
<br>
<?php                //Latihan3.2
$n = 9;
for ($x = $n; $x >= 0; $x--) {
    for ($y = 0; $y <= $x; $y++) {
        echo "- &nbsp";
    }
    for ($k = $n; $k >= $y; $k--) {
        echo "+ ";
    }
    echo "<br>";
}
?>
<br>
<?php                //Latihan3.3

  $n = 9;
    for ($o = 1; $o <= $n; $o++) {
        for ($t = 1; $t <= $n; $t++) {
            if ((($o==1) || ($o==$n) )
            || (($o==2 && $t==2) ) || (($o==2 && $t==3) ) || (($o==2 && $t==4) ) || (($o==2 && $t==5) ) || (($o==2 && $t==6) ) || (($o==2 && $t==7) ) || (($o==2 && $t==8) ) 
            || (($o==3 && $t==3) ) || (($o==3 && $t==4) ) || (($o==3 && $t==5) ) || (($o==3 && $t==6) ) || (($o==3 && $t==7) ) 
            || (($o==4 && $t==4) ) || (($o==4 && $t==5) ) || (($o==4 && $t==6) )
            || (($o==5 && $t==5) )
            || (($o==8 && $t==2) ) || (($o==8 && $t==3) ) || (($o==8 && $t==4) ) || (($o==8 && $t==5) ) || (($o==8 && $t==6) ) || (($o==8 && $t==7) ) || (($o==8 && $t==8) ) 
            || (($o==7 && $t==3) ) || (($o==7 && $t==4) ) || (($o==7 && $t==5) ) || (($o==7 && $t==6) ) || (($o==7 && $t==7) ) 
            || (($o==6 && $t==4) ) || (($o==6 && $t==5) ) || (($o==6 && $t==6) )){
                echo "* ";
            } else {
                echo "- ";
            }
        }
        echo "<br>";
    }


    echo "<br>";

    ?>
    <?php               //Latihan3.4
    $ukuran=9;
for($a=1; $a<=$ukuran; $a++){
	for($b=1; $b<=$ukuran; $b++){
		 if ((($a==1) || ($a==$ukuran) || ($a==5)) || ($b==1 && $a<=5) || ($b==9 && $a>=5 )) {
            echo "+";
        } else{
			echo " -&nbsp";
		}
	}
	echo "<br>";
}?>


    <?php                   //Latihan 1
$n = 9;
$i = 0;
while ($n <= 20 ) {
    echo "$n, ";
 $n+=2;
} 
?>
<br>                
<?php                       //latihan 1.1
$n1=9;
for ($b = 1; $b < $n1; $b++){
	if ($b == 2 || $b == 4 || $b == 6){
    	continue;
    }
    	echo "$b, ";
    }
?>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

    // Latihan 1

    function hitung($baris)
    {
        if ($baris % 2 == 0) {
            $hasil = $baris *= 2;
        } else if ($baris % 2 == 1) {
            $hasil = $baris *= 3;
        }
        return $hasil;
    }

    $hasil = [hitung(7), hitung(10), hitung(19), hitung(20)];

    ?>

    <?php foreach ($hasil as $x) : ?>
        <ul>
            <li><?= $x ?></li>
        </ul>
    <?php endforeach; ?>


    <?php

    // latihan 5
    for ($b = 1; $b <= 5; $b++) {
        for ($k = 1; $k <=$b; $k++) {
            echo $k;
        }
        echo "<br>";
    }

        echo "<br>";

    // latihan 6
    $n = 9;
    for ($k = 0; $k < $n; $k++) {
        for ($c = 0; $c < $n; $c++) {
            echo "($k, $c) ";
        }
        echo "<br>";
    }

    echo "<br>";

    // latihan 7
    $n = 9;
    for ($q = 0; $q < $n; $q++) {
        for ($p = 0; $p < $n; $p++) {
            if ($q % 2 == 0) {
                echo "- ";
            } else {
                echo "+ ";
            }
        }
        echo "<br>";
    }

    echo "<br>";

    // latihan 8
    $n = 9;
    for ($q = 0; $q < $n; $q++) {
        for ($p = 0; $p < $n; $p++) {
            if ($p % 2 == 0) {
                echo "+ ";
            } else {
                echo "- ";
            }
        }
        echo "<br>";
    }

    echo "<br>";

    // latihan 9
    $n = 9;
    for ($x = 1; $x <= $n; $x++) {
        for ($y = 1; $y <= $n; $y++) {
            if ($x == $y) {
                echo "+ ";
            } else {
                echo "- ";
            }
        }
        echo "<br>";
    }

    echo "<br>";

    // latihan 10 
    $n = 9;
    for ($x = $n; $x >= 1; $x--) {
        for ($y = 1; $y <= $n; $y++) {
            if ($x == $y) {
                echo "+ ";
            } else {
                echo "- ";
            }
        }
        echo "<br>";
    }

    echo "<br>";

    // latihan 11
    $n = 9;
    for ($o = 0; $o < $n; $o++) {
        for ($t = 0; $t < $n; $t++) {
            if ($o == $t or $o + $t == 8) {
                echo "+ ";
            } else {
                echo "- ";
            }
        }
        echo "<br>";
    }


    echo "<br>";


    // latihan 12
    $n = 9;
    for ($x = 1; $x <= $n; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            echo "+ ";
        }
        for ($k = $n; $k >= $y; $k--) {
            echo "- ";
        }
        echo "<br>";
    }


    // latihan 13
    $n = 9;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j > $i; $j--) {
            echo "- ";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "+ ";
        }   
        
        echo "<br>";
    }

    echo "<br>";

    ?>
<?php      //Latihan3.2
$arr = array(5,9,6,7,9,8,10,7,8.); 
echo '<pre>';
print_r($arr);
//sort reverse
rsort($arr);
print_r($arr);
//split array
$parts = array_chunk($arr, 3);
print_r($parts);
//3 data terbesar ==> index ke 0
print_r($parts[6])
?>


</body>

</html> -->