    <?php  
        echo "================= "."\n";
        echo "|     MEMOME    | "."\n";
        echo "================= "."\n";

        echo "Jumlah data yang akan dimasukkan : ";
        $jumlah = trim(fgets(STDIN));
        
        for ($i=1; $i <= $jumlah; $i++) { 
            echo "Input ke-".$i." : ";
            $nilai[] = trim(fgets(STDIN));
        }
        
        echo "\n";
        
        $count = count($nilai);
        echo "Mean : ";
        print_r(array_sum($nilai)/$count);
        
        echo "\n";
        
        sort($nilai);
        // print_r($nilai);
        
        $m = $count/2;
        
        if (is_double($m)) {
            $m = floor($m);
            $median = $nilai[$m];
        } else {
            $m = round($m);
            $median = ($nilai[$m-1] + $nilai[$m]) / 2;
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
       
    // function inputdinamis(){     
    //     function mmmr($array, $output = 'mean'){ 
    //     if(!is_array($array)){ 
    //         return FALSE; 
    //     }else{ 
    //         switch($output){ 
    //             case 'mean': 
    //                 $count = count($array); 
    //                 $sum = array_sum($array); 
    //                 $total = $sum / $count; 
    //             break; 
    //             case 'median': 
    //                 rsort($array); 
    //                 $middle = round(count($array) / 2); 
    //                 $total = $array[$middle-1]; 
    //             break; 
    //             case 'modus': 
    //                 $v = array_count_values($array); 
    //                 arsort($v, ); 
    //                 foreach($v as $k => $v){$total = $k; break;} 
    //             break; 
    //         } 
    //         return $total; 
    //     } 
    //  } 
    // }
    // inputdinamis();
    // $arr = array(5,9,6,7,9,8,10,7,8.); 
    // echo 'Mean: '.mmmr($arr).'<br>'; 
    // echo 'Median: '.mmmr($arr, 'median').'<br>';  
    // echo 'Modus: '.mmmr($arr, 'modus').'<br>'; 
    // echo "<br>";    
    ?>
                      <h3><header>Latihan Topik 4.2</header></h3> 

 <?php
    //fungsi untuk print 3 angka terbesar
// function print3largest($arr, $arr_size) 
// { 
//     $i; $first; $second; $third; 

//         //pengecekan jika array size lebih dari 3, maka input invalid.
//     if ($arr_size < 3) 
//     { 
//         echo " Invalid Input "; 
//         return; 
//     } 

//     $third = $first = $second = PHP_INT_MIN; 
//     for ($i = 0; $i < $arr_size ; $i ++) 
//     { 
//         // jika elemen saat ini adalah
//         // lebih besar dari $first
//         if ($arr[$i] > $first) 
//         { 
//             $third = $second; 
//             $second = $first; 
//             $first = $arr[$i]; 
//         } 

//         // Jika array[i] berada di antara $fist dan $second
//         // lalu perbarui $second
//         else if ($arr[$i] > $second) 
//         { 
//             $third = $second; 
//             $second = $arr[$i]; 
//         } 

//         else if ($arr[$i] > $third) 
//             $third = $arr[$i]; 
//     } 
//     echo "Nilai Terbesar 1 = ".$first."<br>"; 
//     echo "Nilai Terbesar 2 = ".$second."<br>"; 
//     echo "Nilai Terbesar 3 = ".$third."\n"; 
    
// } 
?>
<?
// // Inisialiasi array nya
// $arr = array(5, 6,7,7,8,8,9,9,10); 
// $n = count($arr); 
// print3largest($arr, $n); 
    
//    
    
// // php program to find the first, second 
// // and third minimum element in an array 
  
// function Print3Smallest($array, $n) 
// { 
//     $MAX = 100000; 
//     $firstmin = $MAX; 
//     $secmin = $MAX; 
//     $thirdmin = $MAX; 
//     for ($i = 0; $i < $n; $i++) 
//     { 
          
//         /* Check if current element is less than 
//         firstmin, then update first, second and 
//         third */
//         if ($array[$i] < $firstmin) 
//         { 
//             $thirdmin = $secmin; 
//             $secmin = $firstmin; 
//             $firstmin = $array[$i]; 
//         } 
  
//         /* Check if current element is less than 
//         secmin then update second and third */
//         else if ($array[$i] < $secmin) 
//         { 
//             $thirdmin = $secmin; 
//             $secmin = $array[$i]; 
//         } 
  
//         /* Check if current element is less than 
//         then update third */
//         else if ($array[$i] < $thirdmin) 
//             $thirdmin = $array[$i]; 
//     } 
  
//     echo "Nilai Terkecil 1 = ".$firstmin."<br>"; 
//     echo "Nilai Terkecil 2 = ".$secmin."<br>"; 
//     echo "Nilai Terkecil 3 = ".$thirdmin."<br>"; 
// } 
  
// // Driver code 
//     $array= array(5, 6,7,7,8,8,9,9,10); 
//     $n = sizeof($array) / sizeof($array[0]); 
//     Print3Smallest($array, $n); 
  
// // This code is contributed by mits 
?> 
                        
<?php                  //Menggurutkan sesuai Key
$students = [
  'IT-001' => 'Ridwan',
  'IT-010' => 'Achmad',
  'IT-005' => 'Yusuf',
  'IT-002' => 'Arief',
  'IT-004' => 'Dayat',
  'IT-017' => 'Lutfi',
 ];

ksort($students);

echo "<pre>";
print_r($students);
?>
<?php                        //Menggurutkan sesuai Value
     $students = [
      'IT-001' => 'Ridwan',
      'IT-010' => 'Achmad',
      'IT-005' => 'Yusuf',
      'IT-002' => 'Arief',
      'IT-004' => 'Dayat',
      'IT-017' => 'Lutfi',
     ];
     asort($students);

echo "<pre>";
print_r($students);
?>
<?php     //latihan4.2               //Menggurutkan sesuai key(age, dll)
$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
   ];
   foreach ($key as $value) {
       $value = $value*6;
       $total = $value/2;
   }

    sort($nilai);
   print_r($students);

   function array_sort_by_key(&$array, $subfield,$order=SORT_ASC){
    $sortarray = array();
    foreach($array as $key => $row){
        $sortarray[$key] = $row[$subfield];
    }
    array_multisort($sortarray, $order, $array);
}
array_sort_by_key($students, 'age');
print_r($students);
?>
</body>
</html>

<?php          //latihan 4.1 
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
rsort($nilai);

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
