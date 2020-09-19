
<?php
// echo "||                                                                                         ||"."\n";                                                   
// echo "||                                                 ||||||||||||||||||                      ||"."\n";
// echo "||                       ||    ||     ||||||||                                             ||"."\n";
// echo "||                       ||    ||     ||    ||     ||||||||   ||   ||                      ||"."\n";  
// echo "||                       ||    ||     ||    ||           ||   ||   ||                      ||"."\n";  
// echo "||                       ||||||||     ||||||||           ||   ||   ||                      ||"."\n";                                                   
// echo "||                       ||           ||           ||||||||   ||   ||                      ||"."\n";
// echo "||                       ||||||||     ||||||||     ||    ||   ||   ||                      ||"."\n";                                                   
// echo "||                       ||    ||           ||     ||    ||   ||   ||                      ||"."\n";
// echo "||                       |||||||||||||||||||||     ||||||||||||||||||                      ||"."\n";                                                   
// echo "||                                                                                         ||"."\n";
// echo "                 ============================================================              "."\n";
// echo "                 ||+======================================================+||              "."\n";
// echo "                 ||             INGAT! ! ! !  SURGA ITU MAHAL              ||              "."\n";
// echo "                 ||+======================================= Created:tEDy =+||              "."\n";                                                    
// echo "                 ============================================================              "."\n";
// echo "||                                                                                         ||"."\n";
// echo "||   ||||| || ||||||| || || ||||| ||  ||||||| || || |||||||| || || || ||||| || || || ||    ||"."\n";                                                   
// echo "||   || || ||      || || || || || ||       || || ||       || || || || || || || || || ||    ||"."\n";
// echo "||   |||||||||||||||| || || ||    ||||||||||| || || ||||| || || || || ||||| || || || ||    ||"."\n";                                                   
// echo "||   ||               || || ||    || || ||    || ||    || || || || || || || || || || ||    ||"."\n";
// echo "||   ||||||||||||| || || || |||||||| ||||| || || || ||||| || || || || || ||||||||||||||    ||"."\n";                                                   
// echo "||                 || || ||                || || || || || || || || || ||                   ||"."\n";
// echo "||   ||||||||||||||||||| || |||||||||||||||||||| || |||||||||||||| || |||||||||||||| ||    ||"."\n";
// echo "||                                                                                         ||"."\n";
// echo "||                                                                                         ||"."\n";

?>

<?php
// $nilai = array('5956560159466056');
 
// // tampilkan nilai asli
// echo'$nilai =',"\n";
// print_r($nilai);
 
// // split data array ke 0 (karena hanya berisi 1 data)
// $nilai1 = explode('0', $nilai[0]);
 
// // tampilkan hasil split
// echo '$nilai1 =',"\n";
// print_r($nilai1);
 
// // var untuk menampung pengurutan
// $nilai2 = array();
 
// foreach($nilai1 as $k=>$v){
//     // split string jadi array
//     $nilai2[$k] = str_split($v);
//     // sort array
//     sort($nilai2[$k]);
//     // kembalikan array jadi string lagi
//     $nilai2[$k] = implode('', $nilai2[$k]);
// }
 
// // tampilkan nilai hasil diurutkan
// echo '$nilai2 =',"\n";
// print_r($nilai2);
 
// // hasil akhir simpan lagi ke dalam array
// $nilai3 = array(implode('', $nilai2));
 
// // tampilkan hasil akhir
// echo '$nilai3 = ',"\n";
// print_r($nilai3);
// $nilai = array('buku1'=>'kuning')(,'hijau,merah');
// print_r($nilai);
// $data['Judul']= "sasasa";
// $data['Isbn']= "sasasa";
// $data['Penulsi']= "sasasa";
// $data['Penerbit']= "sasasa";
// $data1['Judul']= "sasasa";
// $data1['Isbn']= "sasasa";
// $data1['Penulsi']= "sasasa";
// $data1['Penerbit']= "sasasa";

// $total[Buku1]=array_combine ($data, $data1);
// print_r($total);
?>

<?php

// $a = array('judul', 'isbn', 'Penerbit');
// $b = array('NegeriParaBedebah', '456-765-6-5345', 'Gramedia');
// $e['Buku1']= array_combine($a, $b);
// echo "Daftar Buku : "."\n";
// print_r($e);

// $c = array('judul', 'isbn', 'Penerbit');
// $d = array('Rindu', '32423-456-6-654-4', 'Gramedia');
// $f['Buku2']= array_combine($c, $d);
// print_r($f);

// echo "Mau Minjem Buku (y/n) : ";
// $tanya = trim(fgets(STDIN));
// if ($tanya == 'y' ) {
//     echo "Buku Yanga Mana ? "."\n";
//     $tanya1 = trim(fgets(STDIN));
//     if ($tanya1 == 'Buku1'||'NegeriParaBedebah') {
//         echo "Terimakasi Telah Berkunjung"."\n"."\n";
//         echo "-> Sisa Buku = "."\n";
//         print_r($f);
             
//     }if ($tanya1 == 'Buku2'||'Rindu') {
//         echo "Terimakasi Telah Berkunjung"."\n"."\n";
//         echo "-> Sisa Buku = "."\n";
//         print_r($e);     
//     }
// }if ($tanya == 'n') {
//     echo "Terimakasih Telah Datang Ke Perpustakaan"."\n"."\n";
//     print_r($e);
//     print_r($f);
// }else {
//     echo "Buku Yang Anda Inginkan Tidak Tersedia";
// }

?>
<?php


// $ar= array('Judul'=>'apple', 'Isbn'=>'banana', 'Penulis'=>'pear', 'Penerbit'=>'orange','Judul'=>'aada', 'Isbn'=>'34324-324243-23', 'Penulis'=>'pearee', 'Penerbit'=>'orangebook');
// print_r(array_slice($ar,0,2));


?>
<?php 

// //rumus
// class Rumus
// {
//     //PersegiPanjang
//     protected static function PersegiPanjang($panjang, $lebar) {
//         $hitung = $panjang*$lebar;
//         echo "hasilnya : ".$hitung."\n";
//     }
//     //Lingkaran
//     protected static function Lingkaran($diameter) {
//         $Jari = $diameter/2;
//         $hasil = 3.14*($Jari*$Jari);
//         echo "hasilnya : ".$hasil."\n";
//     }
//     //Trapesium
//     protected static function Trapesium($Sisi1, $Sisi2, $Tinggi){
//         $Hasil = 1/2*($Sisi1+$Sisi2)*$Tinggi;
//         echo "hasilnya : ".$Hasil."\n";
//     }

// }

// //Tampilan

// class Tampilan extends Rumus
// {
//     public function __construct(){
//         echo "=====================\n";
//         echo "|       RUMUS       |\n";
//         echo "=====================\n";
//         echo "\n";
//         echo "1) Persegi Panjang\n";
//         echo "2) Lingkaran\n";
//         echo "3) Trapesium\n";
//         echo "\n";
//         echo "pilihan > ";
//         $pilih = trim(fgets(STDIN));
//         echo "\n";
//         if ($pilih == 1) {
//             echo "masukkan nilai panjang : ";
//             $Panjang = trim(fgets(STDIN));
//             echo "masukkan nilai lebar : ";
//             $Lebar = trim(fgets(STDIN));
//             Rumus::PersegiPanjang($Panjang, $Lebar);
            
//         }elseif ($pilih == 2) {
//             echo "masukkan nilai diameter : ";
//             $Diameter = trim(fgets(STDIN));
//             Rumus::Lingkaran($Diameter);
//         }elseif ($pilih == 3) {
//             echo "masukkan nilai sisi 1 : ";
//             $sisi1 = trim(fgets(STDIN));
//             echo "masukkan nilai sisi 2 : ";
//             $sisi2 = trim(fgets(STDIN));
//             echo "masukkan nilai tinggi : ";
//             $tinggi = trim(fgets(STDIN));
//             Rumus::Trapesium($sisi1, $sisi2, $tinggi);
//         }else {
//             echo "pilihan tidak ada!!!\n";
//         }

//     }
// }
// $tampilan = new Tampilan();
?>
<?php

// class GeraiMiAyam
// {
//     /**
//      * Bahan-bahan masakan penyusun mi ayam
//      * @var array
//      */
//     protected $ingredients = [
//         'mi', 'sawi', 'ayam', 'garam', 'rempah',
//     ];

//     /**
//      * Terima pesanan dari pembeli
//      * @return MiAyam
//      */
//     public function order(): MiAyam
//     {
//         $miAyam = $this->cook();

//         return $miAyam;
//     }

//     /**
//      * Memasak mi ayam
//      * @return MiAyam
//      */
//     protected function cook(): MiAyam
//     {
//         // rebus bahan-bahan
//         $miAyam = boil($ingredients);

//         return $miAyam;
//     }
// }

// $geraiMiAyam = new GeraiMiAyam(); // inisialisasi gerai

// // memesan mi ayam dari gerai 1
// $miAyam = $geraiMiAyam->order(); // hore, dapat mi ayam

// $geraiMiAyamCabangParangtritis = new GeraiMiAyam();
// $geraiMiAyamCabangGunungkidul = new GeraiMiAyam();

// $geraiMiAyam = new GeraiMiAyam();

// $miAyam = $geraiMiAyam->cook(); // Error: Call to protected method cook()

// class GeraiMiAyamBakso extends GeraiMiAyam
// {
//     /**
//      * Topping sajian
//      */
//     protected $topping = 'bakso';

//     public function cook(): MiAyamBakso
//     {
//         // rebus bahan-bahan
//         $miAyam = boil($this->ingredients);

//         // beri tambahan bakso pada sajian
//         $miAyamBakso = $this->applyTopping($miAyam);

//         return $miAyamBakso;
//     }

//     protected function applyTopping($miAyam)
//     {
//         return $miAyam + $this->topping;
//     }
// }

// $geraiMiAyamBakso = new GeraiMiAyamBakso(); // inisialisasi gerai mi ayam bakso

// // memesan mi ayam bakso dari gerai tersebut
// $miAyamBakso = $geraiMiAyamBakso->order(); // hore, dapat mi ayam bakso

// class MiAyamCeker {}

// class MiAyamPangsit {}

// class MiAyamSetan {}

// class OperasiHitung 
// {
//  class Operator{   
//      public $operator = [
//          'tambah' => '+',
//          'kurang' => '-',
//          'kali' => '*',
//          'bagi' => '/'
//      ];

//      public function setOperator($operator1) {
//          $operator1['tambah'] = $operator1;
//          echo $this->operator['tambah'];
//      }

//      public function getOperator($operator = '') {
//          if ($operator) {
//              return $this->operator."\n";
//          }
//          return $this->operator($operator)."\n";
        
//      }

//      public function penjumlahan(int $angka, int $bilangan) {
//          $hasil = $angka+$bilangan;
//          return $angka.$this->operator['tambah'].$bilangan."= ".$hasil;      
//      }
//      public function peengurangan($angka, $bilangan) {
//          $hasil = $angka-$bilangan;
//          return $angka.$this->operator['kurang'].$bilangan."= ".$hasil;      
//      }
//      public function perkalian($angka, $bilangan) {
//          $hasil = $angka*$bilangan;
//          return $angka.$this->operator['kali'].$bilangan."= ".$hasil;      
//      }
//      public function pembagian($angka, $bilangan) {
//          $hasil = $angka/$bilangan;
//          return $angka.$this->operator['bagi'].$bilangan."= ".$hasil;      
//      }
//      public function luasPersegi($angka, $bilangan) {
//          $hasil = $this->perkalian($angka, $bilangan);
//          return "luas :".$hasil;
//      }
//  }

//  $hitung = new OperasiHitung;

//  print_r($hitung->getOperator())."\n";

//  echo "hasilnya adalah : ".$hitung->penjumlahan(5, 3)."\n";

?>

<?php
// class pendataan 
// {
//     public $buku = [
//         [
//             'isbn' => 'T01',
//             'judul' => 'wadidaw1'
//         ],
//         [
//             'isbn' => 'T01',
//             'judul' => 'wadidaw2'
//         ],
//         [
//             'isbn' => 'T01',
//             'judul' => 'wadidaw3'
//         ]
//     ];

//     public $siswa = [
//         [
//             'id' => 'sis1',
//             'nama' => 'siapa aku'
//         ]
//     ];

//     public function nambahsiswa() 
//     {
//         echo "Daftar Siswa\n";
//         echo "-------------\n";
//         print_r($this->siswa);
//         echo "\n";

//         echo "Tambah Siswa\n";
//         echo "-------------\n";
//         $i = count($this->siswa);
//         echo "Input User-ID : ";
//         $this->siswa[$i]['id']= trim(fgets(STDIN));
//         echo "Nama Siswa : ";
//         $this->siswa[$i]['nama'] = trim(fgets(STDIN));

//         print_r($this->siswa);

//     }

//     public function __construct() {
//         echo "mkanansa";
//     }
// }

// class pelayanan extends pendataan 
// {
//     public $datapinjam = [];
//     public $datakembali = [];
    
//     public function peminjaman()
//     {
//         echo "Daftar Buku\n";
//         echo "-------------\n";
//         print_r($this->buku);
//         echo "\n";

//         echo "Peminjaman Buku\n";
//         echo "----------------\n";
//         $i = count($this->datapinjam);
//         echo "Nama Siswa : ";
//         $this->datapinjam[$i]['nama']= trim(fgets(STDIN));
//         echo "Judul Buku : ";
//         $this->datapinjam[$i]['judul']= trim(fgets(STDIN));
//         echo "Tanggal Pinjam : ";
//         $this->datapinjam[$i]['tgl_pinjam'] = trim(fgets(STDIN));
//         echo "Tanggal Kembali : ";
//         $this->datapinjam[$i]['tgl_kembali']= trim(fgets(STDIN));

//         for ($i=0; $i < count($this->buku) ; $i++) { 
//             for ($A=0; $A < count($this->datapinjam) ; $A++) { 
//                 if ($this->buku[i]['judul'] == $this->datapinjam[$i]['judul']) {
//                     unset($this->buku[$i]);
//                     array_slice($this->buku,0,count($this->buku));
//                 }
//             }
//         }

//         print_r($this->buku);
//         print_r($this->datapinjam);

//     }

//     public function pengembalian()
//     {
//         echo "Data Peminjam Buku\n";
//         echo "-------------\n";
//         print_r($this->datapinjam);
//         echo "\n";   

//         echo "Pengembalian Buku\n";
//         echo "----------------\n";
//         $i = count($this->datakembali);
//         echo "Nama Siswa : ";
//         $this->datakembali[$i]['nama']= trim(fgets(STDIN));
//         echo "Judul Buku : ";
//         $this->datakembali[$i]['judul']= trim(fgets(STDIN));
//         echo "Tanggal Pinjam : ";
//         $this->datakembali[$i]['tgl_pinjam'] = trim(fgets(STDIN));
//         echo "Tanggal Kembali : ";
//         $this->datakembali[$i]['tgl_kembali']= trim(fgets(STDIN));

//         print_r($this->datakembali);
//     }
// }

// echo "=-=-==-=-=-=-=-=-===---=--=-=\n";
// echo "hywhsywhyywhswyhsywshyhyhwysw\n";
// echo "=-=--=-=-==--=-=-=-=-=-=-=-=-\n";

// $dataper = new pendataan;
// $datalay = new pelayanan;

// $kond = true;
// while ($kond) {
//     echo "MENU\n";
//     echo "1. Pinjam buku\n";
//     echo "2. Pengembalian Buku\n";
//     echo "3. Tambah siswa\n";
//     echo "4. Keluar \n";
//     echo "pilih Menu: ";
//     $menu = trim(fgets(STDIN));
//     echo "\n";

//     switch ($menu) {
//         case 1:
//             $datalay->peminjaman();

//             echo "\n\n";
//             echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
//             $pilih = trim(fgets(STDIN));
//             if($pilih == 'Y' || $pilih == 'y'){
//                 $kond = true;
//             }elseif($pilih == 'N' || $pilih == 'n'){
//                 $kond = false;
//             }
//         break;        
//         case 2:
//             $datalay->pengembalian();

//             echo "\n\n";
//             echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
//             $pilih = trim(fgets(STDIN));
//             if($pilih == 'Y' || $pilih == 'y'){
//                 $kondisi = true;
//             }elseif($pilih == 'N' || $pilih == 'n'){
//                 $kondisi = false;
//             }
//         break;        
//         case 3:
//             $dataper->nambahsiswa();

//             echo "\n\n";
//             echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
//             $pilih = trim(fgets(STDIN));
//             if($pilih == 'Y' || $pilih == 'y'){
//                 $kondisi = true;
//             }elseif($pilih == 'N' || $pilih == 'n'){
//                 $kondisi = false;
//             }
//         break;        
//         case 4:
//             $kond = false;
        
//         default:
//             echo "maaf ananda salah server!!!!\n";
//             break;
//     }
// }

 