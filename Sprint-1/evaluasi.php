<?php

for ($i=0; $i <= 9  ; $i++) { 
    for ($q=0; $q <= 9 ; $q++) { 
        if ($q % 2 == 0 ) {
            echo "+";       
        }else {
            echo "-";
        }
    }echo "\n";
}

echo "\n";

for ($i=0; $i <= 9  ; $i++) { 
    for ($q=0; $q <= 9 ; $q++) { 
        if ($i % 2 == 0 ) {
            echo "-";       
        }else {
            echo "+";
        }
    }echo "\n";
}

?>

<?php
$nilai = array('5956560159466056');
echo '$nilai = ',"\n";
print_r($nilai);

//kita pisah nolnya dengan explode
$nilai1 = explode('0', $nilai[0]);
echo '$nilai1 = ',"\n";
print_r($nilai1);

//kita sortt stelah di pisah
$nilai2 = array();
foreach($nilai1 as $key => $value){
    $nilai2[$key] =str_split($value);
    sort($nilai2[$key]);
    $nilai2[$key]= implode('', $nilai2[$key]);
}
echo '$nilai2 = ',"\n";
print_r($nilai2);

$nilai3 = array(implode('', $nilai2));
echo '$nilai3 = ',"\n";
print_r($nilai3);
?>

<br>

<?php
echo "Mau input Berapa Data ? ","\n";
$jumlah = trim(fgets(STDIN));
for ($i=1; $i <= $jumlah ; $i++) { 
echo "Masukan Data ". $i."\n";
echo "nama = ";
$data['nama']= trim(fgets(STDIN));
echo "nik = ";
$data['nik']= trim(fgets(STDIN));
echo "divisi = ";
$data['divisi']= trim(fgets(STDIN));
echo "jurusan = ";
$data['jurusan']= trim(fgets(STDIN));
echo "umur = ";
$data['umur']= trim(fgets(STDIN));
$total[]=$data;
print_r($total);
}
foreach ($total as $key => $value) {
if($value['divisi']== 'Backend'){
    $backend[] = $value['nama'];
}
if ($value['umur'] < 25) {
    $umur[] = $value['nama'];
}
    ($all[]= $value['umur']);  
}
echo "Yang minat sebagai Backend adalah ";
foreach($backend as $value){
    echo $value."\n";
}
echo "Usia yang kurang dari 25 adalah ";
foreach($umur as $value){
    echo $value."\n";
}
echo "Usia Paling muda adalah ";
array_multisort($all, SORT_ASC,  $total);
$min = min($all);
foreach($total as $value){
    if ($value['umur'] == $min){
        echo $value['nama'];
    }
}   





