<?php                  // contoh Galat sprint2(topik3)}

class Pendataan{

    public $dataBuku = [
        [
            'isbn' => 'B001',
            'judul' => 'Sebelum Terang Gelap'
            
        ],
        [
            'isbn' => 'B002',
            'judul' => 'Tutorial Bikin Dunia Terang'
            
        ],
        [
            'isbn' => 'B003',
            'judul' => '2 Jam Ngapa-ngapain'
            
        ]
    ];

    public $member = [
        [
            'userid' => 'M001',
            'name' => "Hamba Allah"
        ]
    ];

    public function tambahBuku(){
        echo "DAFTAR BUKU\n";
        echo "=============\n";
        print_r($this->dataBuku);
        echo "\n\n";

        echo "TAMBAH BUKU\n";
        echo "=============\n";
        $i = count($this->dataBuku);
        echo "Input Kode Buku : ";
        $this->dataBuku[$i]['isbn'] = trim(fgets(STDIN));
        echo "Input Judul Buku: ";
        $this->dataBuku[$i]['judul'] = trim(fgets(STDIN));

        print_r($this->dataBuku);

    }

    public function tambahMember(){
        echo "DAFTAR MEMBER\n";
        echo "=============\n";
        print_r($this->member);
        echo "\n\n";

        echo "TAMBAH MEMBER\n";
        echo "=============\n";
        $i = count($this->member);
        echo "Input User-ID : ";
        $this->member[$i]['userid'] = trim(fgets(STDIN));
        echo "Nama Member : ";
        $this->member[$i]['name'] = trim(fgets(STDIN));

        print_r($this->member);
    }


}

class Pelayanan extends Pendataan{

    public $dataPinjam = [];

    public $dataKembali = [];
     
    public function peminjaman(){

        //MENAMPILKAN DATA

        echo "DAFTAR BUKU\n";
        echo "===========\n\n";
        print_r($this->dataBuku);
        echo "\n\n";
        

        //INPUT DATA 

        echo "PEMINJAMAN BUKU\n";
        echo "===============\n";
        $i = count($this->dataPinjam);
        echo "Nama Member : ";
        $this->dataPinjam[$i]['name'] = trim(fgets(STDIN));
        echo "Judul Buku : ";
        $this->dataPinjam[$i]['judul'] = trim(fgets(STDIN));
        echo "Tanggal Pinjam : ";
        $this->dataPinjam[$i]['tgl_pinjam'] = trim(fgets(STDIN));
        echo "Batas Peminjaman : ";
        $this->dataPinjam[$i]['batas_pinjam'] = trim(fgets(STDIN));

        //EDIT ISI DATA BUKU
        for($i=0;$i<count($this->dataBuku); $i++){
            for($j=0;$j<count($this->dataPinjam);$j++){
                if($this->dataBuku[$i]['judul'] == $this->dataPinjam[$j]['judul']){
                    
                    unset($this->dataBuku[$i]);
                    array_slice($this->dataBuku,0,count($this->dataBuku));
                }
            }
        }
        print_r($this->dataBuku);
        print_r($this->dataPinjam); 
    } 

    public function pengembalian(){
        echo "DAFTAR PEMINJAMAN BUKU\n";
        echo "======================\n\n";
        print_r($this->dataPinjam);
        
        echo "\n\n";
        echo "PENGEMBALIAN BUKU\n";
        echo "=================\n";
        $i = count($this->dataKembali);
        echo "Nama Member : ";
        $this->dataKembali[$i]['name'] = trim(fgets(STDIN));
        echo "Judul Buku : ";
        $this->dataKembali[$i]['judul'] = trim(fgets(STDIN));
        echo "Tanggal Kembali : ";
        $this->dataKembali[$i]['tgl_kembali'] = trim(fgets(STDIN));
        echo "Batas Peminjaman : ";
        $this->dataKembali[$i]['batas_pinjam'] = trim(fgets(STDIN));

        print_r($this->dataKembali); 
    }
}

echo "=================================\n";
echo "  Sistem Pendataan Perpustakaan  \n";
echo "=================================\n\n";

$dataPerpus = new Pendataan;
$dataLayanan = new Pelayanan;

$kondisi = true;
while($kondisi){
    echo "MENU\n";
    echo "1. Pinjam Buku\n";
    echo "2. Pengembalian Buku\n";
    echo "3. Buat Member\n";
    echo "4. Tambah Buku\n";
    echo "5. Exit\n";
    echo "Pilih menu : ";
    $menu = trim(fgets(STDIN));
    echo "\n";

    switch($menu){
        case 1:
            $dataLayanan->peminjaman();

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
            $dataLayanan->pengembalian();

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
            $dataPerpus->tambahMember();

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
            $dataPerpus->tambahBuku();

            echo "\n\n";
            echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
            $pilih = trim(fgets(STDIN));
            if($pilih == 'Y' || $pilih == 'y'){
                $kondisi = true;
            }elseif($pilih == 'N' || $pilih == 'n'){
                $kondisi = false;
            }
        break;

        case 5:
            $kondisi = false;
        break;

        default:
            echo "PILIHAN ANDA TIDAK ADA DALAM MENU BUJANG1!!!\n\n";
            
    }
}
?>

<?php 

//rumus
class Rumus
{
    //PersegiPanjang
    protected static function tambahsantri($id, $nama) {
        echo $name."teddi rahman ".$id."010101"."\n";
    }
    //Lingkaran
    protected static function updatesantri($diameter) {
        $Jari = $diameter/2;
        $hasil = 3.14*($Jari*$Jari);
        echo "hasilnya : ".$hasil."\n";
    }
    //Trapesium
    protected static function deletesantri($Sisi1, $Sisi2, $Tinggi){
        $Hasil = 1/2*($Sisi1+$Sisi2)*$Tinggi;
        echo "hasilnya : ".$Hasil."\n";
    }

}

//Tampilan

class Tampilan extends Rumus
{
    public function __construct(){
        echo "=====================\n";
        echo "|       RUMUS       |\n";
        echo "=====================\n";
        echo "\n";
        echo "1) Persegi Panjang\n";
        echo "2) Lingkaran\n";
        echo "3) Trapesium\n";
        echo "\n";
        echo "pilihan > ";
        $pilih = trim(fgets(STDIN));
        echo "\n";
        if ($pilih == 1) {
            echo "masukkan nilai panjang : ";
            $Panjang = trim(fgets(STDIN));
            echo "masukkan nilai lebar : ";
            $Lebar = trim(fgets(STDIN));
            Rumus::PersegiPanjang($Panjang, $Lebar);
        }elseif ($pilih == 2) {
            echo "masukkan nilai diameter : ";
            $Diameter = trim(fgets(STDIN));
            Rumus::Lingkaran($Diameter);
        }elseif ($pilih == 3) {
            echo "masukkan nilai sisi 1 : ";
            $sisi1 = trim(fgets(STDIN));
            echo "masukkan nilai sisi 2 : ";
            $sisi2 = trim(fgets(STDIN));
            echo "masukkan nilai tinggi : ";
            $tinggi = trim(fgets(STDIN));
            Rumus::Trapesium($sisi1, $sisi2, $tinggi);
        }else {
            echo "pilihan tidak ada!!!\n";
        }

    }
}
$tampilan = new Tampilan();
?>