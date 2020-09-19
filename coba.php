<?php
class pendataan
{
    public  static $santrilama = [
        [
            'id' => '0101',
            'nama' => 'juju'
        ],
        [
            'id' => '0102',
            'nama' => 'jaja'
        ]
        ];

    public function santribaru() {
        echo "Daftar data santri";
        echo "------------------\n";
        print_r($this->santrilama);

        echo "TAMBAH santri\n";
        echo "=============\n";
        $i = count($this->santrilama);
        echo "input ID : ";
        $this->santrilama[$i]['id'] = trim(fgets(STDIN));
        echo "nama: ";
        $this->santrilama[$i]['nama'] = trim(fgets(STDIN));

        print_r($this->santrilama);
    }

}
class pelayanan extends pendataan
{
    public function __construct($datadelete = [],$dataupdate = []){
        return $datadelete;
        return $dataupdate;
    }
    
    

    public function diupdate()
    {
        echo "Daftar data santri";
        echo "------------------\n";
        print_r($this->santrilama);

        echo "delete\n";
        echo "===============\n";
        $i = count($this->datadelete);
        echo "input id : ";
        $this->datadelete[$i]['id'] = trim(fgets(STDIN));
        echo "nama : ";
        $this->datadelete[$i]['nama'] = trim(fgets(STDIN));
        //EDIT ISI DATA BUKU
        for($i=0;$i<count($this->santrilama); $i++){
            for($j=0;$j<count($this->datadelete);$j++){
                if($this->santrilama[$i]['id'] == $this->datadelete[$j]['id']){
                    
                    unset($this->santrilama[$i]);
                    array_slice($this->santrilama,0,count($this->santrilama));
                }
            }
        }
        print_r($this->santrilama);
        print_r($this->datadelete); 
    }
    public function didelete(){
        echo "DAFTAR santri\n";
        echo "======================\n\n";
        print_r($this->datadelete);
        
        echo "\n\n";
        echo "update santri\n";
        echo "=================\n";
        $i = count($this->dataupdate);
        echo "inpu ID : ";
        $this->dataupdate[$i]['id'] = trim(fgets(STDIN));
        echo "nama : ";
        $this->dataupdate[$i]['nama'] = trim(fgets(STDIN));

        print_r($this->dataupdate); 
    }
}
echo "=================================\n";
echo "  Sistem santri baru             \n";
echo "=================================\n\n";

$dataPerpus = new Pendataan;
$dataLayanan = new Pelayanan;

$kondisi = true;
while($kondisi){
    echo "MENU\n";
    echo "1. Tambah Data Santri\n";
    echo "2. Update Data Santri\n";
    echo "3. Delete Data Santri\n";
    echo "4. Exit\n";
    echo "Pilih menu : ";
    $menu = trim(fgets(STDIN));
    echo "\n";
    switch($menu){
        case 1:
            $dataPerpus->santribaru();

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
            $dataLayanan->didelete();

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
            $dataLayanan->diupdate();

            echo "\n\n";
            echo "Apakah Anda ingin memilih menu lain ? (Y/N)";
            $pilih = trim(fgets(STDIN));
            if($pilih == 'Y' || $pilih == 'y'){
                $kondisi = true;
            }elseif($pilih == 'N' || $pilih == 'n'){
                $kondisi = false;
            }
        break;
    }
}